  var endpoint = 'http://www.autocloud.com.br/webservice/';
  //var endpoint = 'http://localhost/autocloud/webservice/';

  var tipo_veiculo = 1;

  $('#TipoVeiculo').val(tipo_veiculo);

  $(".tipo_veiculo").click(function(){
    tipo_veiculo = $(this).val();
    $('#TipoVeiculo').val(tipo_veiculo);
    $("#fabricante").select2({
      placeholder: "Aguarde",
      allowClear: true
    });
    $('#modelo').html('<option></option>');
    $("#modelo").select2({
      placeholder: "Modelo",
      allowClear: true
    });
    $.ajax({
      type: 'GET',
      url: endpoint+'carros/montadoras/'+tipo_veiculo,
      success: function (data){
        $('#fabricante').html('<option></option>');
        $.each(data, function(i, fabricante){
          $('#fabricante').append('<option value="'+fabricante.Chave+'">'+fabricante.Nome+'</option>');
        });
        $('#fabricante').select2({
          placeholder: "Marca",
          allowClear: true
        });
        $('#fabricante').select2('enable', true);
        $('#modelo').attr('disabled',true);
      }
    });
  });


  $("#valor_venda").maskMoney({thousands:'.', decimal:','});




  $("#fabricante").select2({
    placeholder: "Aguarde",
    allowClear: true
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
  $("#estado").select2({
    placeholder: "Aguarde",
    allowClear: true
  });
  $("#cidade").select2({
    placeholder: "Cidade",
    allowClear: true
  });

  //Carrega Fabricantes
  $.ajax({
    type: 'GET',
    url: endpoint+'carros/montadoras/'+tipo_veiculo,
    success: function (data){
      $('#fabricante').html('<option></option>');
      $.each(data, function(i, fabricante){
        $('#fabricante').append('<option value="'+fabricante.Chave+'">'+fabricante.Nome+'</option>');
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
      url: endpoint+'carros/modelos/'+tipo_veiculo+'/'+fabricante_id,
      success: function (data){
        $('#modelo').html('<option></option>');
        $.each(data, function(i, modelo){
          $('#modelo').append('<option value="'+modelo.Chave+'">'+modelo.Nome+'</option>');
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
  $('#anoAte').change(function(){
    var ano_de;
    if (parseInt($('#anoDe').val()) > parseInt($('#anoAte').val())) {
      ano_de = $('#anoDe').val();
      $('#anoDe').val($('#anoAte').val());
      $('#anoAte').val(ano_de);
      $("#anoDe").select2({
        placeholder: "De",
        allowClear: true
      });
      $("#anoAte").select2({
        placeholder: "Até",
        allowClear: true
      });
    }
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
      }
    });
  });

  