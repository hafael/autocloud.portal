  var endpoint = 'http://www.autocloud.com.br/webservice/';
  //var endpoint = 'http://localhost/autocloud/webservice/';

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

  
  