  var endpoint;
  if (location.host=='localhost') {
    endpoint = location.protocol+'//'+location.host+'/autocloud/api/';
  }else{
    endpoint = 'http://api.autocloud.com.br/';
  }

  var tipo_veiculo = 1;


  $("#estado").select2({
    placeholder: "Aguarde",
    allowClear: true
  });

  $("#cidade").select2({
    placeholder: "Cidade",
    allowClear: true
  });
 
  //Carrega Estados
  $.ajax({
    type: 'GET',
    url: endpoint+'places/states',
    success: function (data){
      $('#estado').append('<option disabled></option>');
      $.each(data.states, function(i, states){
        $('#estado').append('<option value="'+states.id+'">'+states.name+'</option>');
      });
      $('#estado').select2({
        placeholder: "Selecione o estado",
        allowClear: true
      });
      $('#estado').select2('enable', true);
    }
  });

  $('#estado').change(function(){
    var fabricante_id = $(this).val();
    $('#cidade').empty();
    $('#cidade').append('<option value="false">Aguarde</option>');
    $.ajax({
      type: 'GET',
      url: endpoint+'places/cities/id/'+fabricante_id,
      success: function (data){
        $('#cidade').html('<option></option>');
        $.each(data.cities, function(i, city){
          $('#cidade').append('<option value="'+city.id+'">'+city.name+'</option>');
        });
        $('#cidade').select2({
          placeholder: "Selecione a cidade",
          allowClear: true
        });
        $('#cidade').select2('enable', true);
        $('#estado option:selected').each(function () {
          $('#EstadoText').val($(this).text());
          $('#CidadeText').val('');
        });
      }
    });
  });
  $('#cidade').change(function(){
    $('#cidade option:selected').each(function () {
      $('#CidadeText').val($(this).text());
    });
  });

  
  