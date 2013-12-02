  var endpoint;
  if (location.host=='localhost') {
    endpoint = location.protocol+'//'+location.host+'/autocloud/api/';
  }else{
    endpoint = 'http://api.autocloud.com.br/';
  }

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
      dataType: 'jsonp',
      data: {type: tipo_veiculo},
      url: endpoint+'vehicles/brands/',
      success: function (data){
        $('#fabricante').html('<option></option>');
        $.each(data.brands, function(i, brand){
          $('#fabricante').append('<option value="'+brand.id+'">'+brand.name+'</option>');
        });
        $('#fabricante').select2({
          placeholder: "Marca",
          allowClear: true
        });
        $('#fabricante').select2('enable', true);
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
    dataType: 'jsonp',
    data: {type: tipo_veiculo},
    url: endpoint+'vehicles/brands/',
    success: function (data){
      $('#fabricante').html('<option></option>');
      $.each(data.brands, function(i, brand){
        $('#fabricante').append('<option value="'+brand.id+'">'+brand.name+'</option>');
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
    dataType: 'jsonp',
    url: endpoint+'places/states',
    success: function (data){
      $('#estado').append('<option disabled></option>');
      $.each(data.states, function(i, state){
        $('#estado').append('<option value="'+state.id+'">'+state.name+'</option>');
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
      dataType: 'jsonp',
      data: { id: fabricante_id, type: tipo_veiculo },
      url: endpoint+'vehicles/models/',
      success: function (data){
        $('#modelo').html('<option></option>');
        $.each(data.models, function(i, model){
          $('#modelo').append('<option value="'+model.id+'">'+model.name+'</option>');
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
    var state_id = $(this).val();
    $('#cidade').empty();
    $('#cidade').append('<option value="false">Aguarde</option>');
    $.ajax({
      type: 'GET',
      dataType: 'jsonp',
      data: { id: state_id },
      url: endpoint+'places/cities/',
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
      }
    });
  });

  