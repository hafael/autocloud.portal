var endpoint;
  if (location.host=='localhost') {
    endpoint = location.protocol+'//'+location.host+'/autocloud/api/';
  }else{
    endpoint = 'http://api.autocloud.com.br/';
  }

function validaEmail(email){
	var er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
	if(er.exec(email)){
		return true;
	}else{
		return false;
	}
};
function existeEmail(email){
	var response;
	var params = {
		email : email
	}
	$.ajax({
		type: 'GET',
		url: 'http://api.autocloud.com.br/users/user/',
		data: params,
		success: function (data){
			console.log(data.user);
			if (data.user) {
				response = true;
			}else{
				response = false;
			};
		}
    });
    return response;
};

$(function() {

	
	$('.dados-cadastro #email').focusout(function(){
		var email = $('.dados-cadastro #email').val();
		if(validaEmail(email)){
			$(this).parents('.control-group').removeClass('error warning').addClass('success');
			$.ajax({
				type: 'GET',
				dataType: 'json',
				url: endpoint+'users/user/',
				data: {email: email},
				success: function (data){
					console.log(data.user);
					if (data.user) {
						$('.dados-cadastro #email').parents('.control-group').removeClass('success error').addClass('warning');
						
					}
				}
		    });
			
		}else{
			$(this).parents('.control-group').removeClass('success warning').addClass('error');
			
		}
	});
	$('.dados-cadastro #telefone').focusout(function(){
		if($(this).val().length > 10){
			$(this).parents('.control-group').removeClass('error').addClass('success');
		}else{
			$(this).parents('.control-group').removeClass('success').addClass('error');
		}
	});
	$('.dados-cadastro #nome').focusout(function(){
		if($(this).val().split(' ').length > 1){
			$('.dados-cadastro #nome').parents('.control-group').removeClass('error').addClass('success');
		}else{
			$('.dados-cadastro #nome').parents('.control-group').removeClass('success').addClass('error');
		}
	});
	$('.dados-cadastro #resenha').focusout(function(){
		if($(this).val() == $('.dados-cadastro #senha').val()){
			$('.dados-cadastro #resenha,.dados-cadastro #senha').parents('.control-group').removeClass('error').addClass('success');
		}else{
			$('.dados-cadastro #resenha,.dados-cadastro #senha').parents('.control-group').removeClass('success').addClass('error');
		}
	});
	$('.dados-cadastro .resenha.error #resenha').keypress(function(){
		if($(this).val() == $('.dados-cadastro #senha').val()){
			$('.dados-cadastro #resenha,.dados-cadastro #senha').parents('.control-group').removeClass('error').addClass('success');
		}else{
			$('.dados-cadastro #resenha,.dados-cadastro #senha').parents('.control-group').removeClass('success').addClass('error');
		}
	});
	$('.dados-cadastro #mostrar-digitos').change(function(){
		var value_pass = $('.dados-cadastro #senha').val();
		var value_pass_re = $('.dados-cadastro #resenha').val();
		$(this).toggleClass('on');
		if($(this).hasClass('on')){
			$('.dados-cadastro #senha, .dados-cadastro #resenha').remove();
			$('.dados-cadastro .senha .controls .help-inline').parent().prepend('<input type="text" id="senha" name="senha" value="'+value_pass+'" class="span8" placeholder="Escolha uma senha">');
			$('.dados-cadastro .resenha .controls').html('<input type="text" id="resenha" name="resenha" value="'+value_pass_re+'" class="span8" placeholder="Re-digite a senha acima">');
		}else{
			$('.dados-cadastro #senha, .dados-cadastro #resenha').remove();
			$('.dados-cadastro .senha .controls .help-inline').parent().prepend('<input type="password" id="senha" name="senha" value="'+value_pass+'" class="span8" placeholder="Escolha uma senha">');
			$('.dados-cadastro .resenha .controls').html('<input type="password" id="resenha" name="resenha" value="'+value_pass_re+'" class="span8" placeholder="Re-digite a senha acima">');
		};
		return false;
	});
	$('.dados-cadastro #estado').change(function(){
		if($(this).val()!=''){
			$(this).parents('.control-group').removeClass('error');
		}else{
			$(this).parents('.control-group').addClass('error');
		}
	});
	$('.dados-cadastro #cidade').change(function(){
		if($(this).val()!=''){
			$(this).parents('.control-group').removeClass('error');
		}else{
			$(this).parents('.control-group').addClass('error');
		}
	});
	$('.dados-cadastro').submit(function(){
		
		if($('.dados-cadastro #estado').val()==''){
			$('.dados-cadastro .estado.control-group').addClass('error');
		}
		if($('#cidade').val()==''){
			$('.dados-cadastro .cidade.control-group').addClass('error');
		}

		var error=0;

		$('.dados-cadastro .control-group.error, .dados-cadastro .control-group.warning').each(function(){
			error++;
		});
		if(error>0){
			return false;
		}

	});


});