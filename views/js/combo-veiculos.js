  var endpoint = 'http://www.autocloud.com.br/webservice/';
  //var endpoint = 'http://localhost/autocloud/webservice/';

  var tipo_veiculo = 1;


  $(".tipo_veiculo").click(function(){
    tipo_veiculo = $(this).val();
    console.log(tipo_veiculo);
    $("#fabricante").select2({
      placeholder: "Aguarde",
      allowClear: true
    });
    $.ajax({
      type: 'GET',
      url: endpoint+'carros/montadoras/'+tipo_veiculo,
      success: function (data){
        $('#fabricante').html('<option></option>');
        $.each(data, function(i, fabricante){
          $('#fabricante').append('<option value="'+fabricante.id+'">'+fabricante.Nome+'</option>');
        });
        $('#fabricante').select2({
          placeholder: "Marca",
          allowClear: true
        });
        $('#fabricante').select2('enable', true);
        $('#modelo, #anoDe, anoAte, #versao').attr('disabled',true).html('<option></option>');
      }
    });
  });


  $("#valor_venda").maskMoney({thousands:'.', decimal:','});




  $("#fabricante").select2({
    placeholder: "Aguarde",
    allowClear: true
  });

  $("#estado").select2({
    placeholder: "Aguarde",
    allowClear: true
  });

  

  //Carrega Fabricantes
  $.ajax({
    type: 'GET',
    url: endpoint+'carros/montadoras/'+tipo_veiculo,
    success: function (data){
      $('#fabricante').html('<option></option>');
      $.each(data, function(i, fabricante){
        $('#fabricante').append('<option value="'+fabricante.id+'">'+fabricante.Nome+'</option>');
      });
      $('#fabricante').select2({
        placeholder: "Marca",
        allowClear: true
      });
      $('#fabricante').select2('enable', true);
    }
  });

  //Carrega Estados
  $.ajax({
    type: 'GET',
    url: endpoint+'estadocidade/estados',
    success: function (data){
      $('#estado').append('<option disabled></option>');
      $.each(data, function(i, fabricante){
        $('#estado').append('<option value="'+fabricante.id+'">'+fabricante.Nome+'</option>');
      });
      $('#estado').select2({
        placeholder: "Estado",
        allowClear: true
      });
      $('#estado').select2('enable', true);
    }
  });


  $('#fabricante').change(function(){
    var fabricante_id = $(this).val();
    $('#modelo').empty();
    $('#modelo').append('<option value="false">Aguarde</option>');
    $.ajax({
      type: 'GET',
      url: endpoint+'carros/modelos/'+fabricante_id,
      success: function (data){
        $('#modelo').html('<option></option>');
        $.each(data, function(i, modelo){
          $('#modelo').append('<option value="'+modelo.id+'">'+modelo.Nome+'</option>');
        });
        $('#modelo').select2({
          placeholder: "Modelo",
          allowClear: true
        });
        $('#modelo').select2('enable', true);
        $('#fabricante option:selected').each(function () {
          $('#fabricanteText').val($(this).text());
        });
      }
    });
  });
  $('#modelo').change(function(){
    var fabricante_id = $(this).val();
    $('#anoDe').empty();
    $('#anoDe').append('<option value="false">Aguarde</option>');
    $.ajax({
      type: 'GET',
      url: endpoint+'carros/anofabricacao/'+fabricante_id,
      success: function (data){
        $('#anoDe').html('<option></option>');
        $.each(data, function(i, modelo){
          $('#anoDe').append('<option value="'+modelo.id+'">'+modelo.Ano+'</option>');
        });
        $('#anoDe').select2({
          placeholder: "De",
          allowClear: true
        });
        $('#anoDe').select2('enable', true);
        $('#modelo option:selected').each(function () {
          $('#modeloText').val($(this).text());
        });
      }
    });


  });
  $('#anoDe').change(function(){
    var fabricante_id = $('#modelo').val();
    $('#anoAte').empty();
    $('#anoAte').append('<option value="false">Aguarde</option>');
    $.ajax({
      type: 'GET',
      url: endpoint+'carros/anofabricacao/'+fabricante_id,
      success: function (data){
        $('#anoAte').html('<option></option>');
        $.each(data, function(i, modelo){
          $('#anoAte').append('<option value="'+modelo.id+'">'+modelo.Ano+'</option>');
        });
        $('#anoAte').select2({
          placeholder: "Até",
          allowClear: true
        });
        $('#anoAte').select2('enable', true);
        $('#anoFab option:selected').each(function () {
          $('#AnoFabText').val($(this).text());
        });
      }
    });
  });
  $('#anoAte').change(function(){
    var fabricante_id = $(this).val();
    $('#versao').empty();
    $('#versao').append('<option value="false">Aguarde</option>');
    $.ajax({
      type: 'GET',
      url: endpoint+'carros/versao/'+fabricante_id,
      success: function (data){
        $('#versao').html('<option></option>');
        $.each(data, function(i, modelo){
          $('#versao').append('<option value="'+modelo.id+'">'+modelo.Nome+'</option>');
        });
        $('#versao').select2({
          placeholder: "Versão",
          allowClear: true
        });
        $('#versao').select2('enable', true);
        $('#anoMod option:selected').each(function () {
          $('#AnoModText').val($(this).text());
        });
      }
    });
  });
  $('#versao').change(function(){
    $('#versao option:selected').each(function () {
      $('#versaoText').val($(this).text());
    });
  });
  $('#estado').change(function(){
    var fabricante_id = $(this).val();
    $('#cidade').empty();
    $('#cidade').append('<option value="false">Aguarde</option>');
    $.ajax({
      type: 'GET',
      url: endpoint+'estadocidade/cidades/'+fabricante_id,
      success: function (data){
        $('#cidade').html('<option></option>');
        $.each(data, function(i, modelo){
          $('#cidade').append('<option value="'+modelo.id+'">'+modelo.Nome+'</option>');
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

  $("#modelo").select2({
    placeholder: "Modelo",
    allowClear: true
  });
  $("#anoDe").select2({
    placeholder: "De",
    allowClear: true
  });
  $("#anoAte").select2({
    placeholder: "Até",
    allowClear: true
  });
  $("#versao").select2({
    placeholder: "Versão",
    allowClear: true
  });
  $("#estado").select2({
    placeholder: "Estado",
    allowClear: true
  });
  $("#cidade").select2({
    placeholder: "Cidade",
    allowClear: true
  });