<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>
    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Conheça o Autocloud</h1>
      <p class="lead">Compre e venda veículos novos e usados</p>
      <div class="row-fluid">
        <div class="span4 well buscar-veiculo">
          <h3>Comprar</h3>
          <div class="btn-group" data-toggle="buttons-radio">
            <button type="button" id="tipo_veiculo" value="1" class="tipo_veiculo btn active">Carro</button>
            <button type="button" id="tipo_veiculo" value="2" class="tipo_veiculo btn ">Moto</button>
          </div>
          <form class="form-horizontal">
            
            <div class="control-group">
              <label class="control-label" for="inputEmail">Marca</label>
              <div class="controls">
                <select class="span12" name="fabricante" id="fabricante" disabled>
                  <option></option>
                </select>
              </div>
              
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Modelo</label>
              <div class="controls">
                <select class="span12" name="modelo" id="modelo" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Ano</label>
              <div class="controls">
                <select class="span6" name="anoDe" id="anoDe" disabled>
                  <option></option>
                </select>
                <select class="span6" name="anoAte" id="anoAte" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Versão</label>
              <div class="controls">
                <select class="span12" name="versao" id="versao" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Estado</label>
              <div class="controls">
                <select class="span12" name="estado" id="estado">
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Cidade</label>
              <div class="controls">
                <select class="span12" name="cidade" id="cidade" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large pull-right">Buscar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="span8">
          <h2>Venda seu veículo</h2>
          <p class="lead">Escolha o tipo de veículo e anuncie <strong>gratuitamente</strong></p>
          <?php 
          if($this->anunciante->logged()){
          ?>
          <div class="row-fluid home-planos">
            <div class="span6">
              <h3>Venda seu carro</h3>
              <img src="<?=base_url()?>applications/portal/views/images/carsale.jpg" alt="Anunciar carro">
              <a class="btn btn-large btn-block btn-success" href="<?=base_url()?>admin/novo-anuncio-carro" target="_blank">Anunciar carro &raquo;</a>
            </div><!--/span-->
            <div class="span6">
              <h3>Venda sua moto</h3>
              <img src="<?=base_url()?>applications/portal/views/images/bikesale.jpg" alt="Anunciar carro">
              <a class="btn btn-large btn-block btn-success" href="<?=base_url()?>admin/novo-anuncio-moto" target="_blank">Anunciar moto &raquo;</a>
            </div><!--/span-->
          </div>
          
          <?php
          }else{
          ?>
          <div class="row-fluid home-planos">
            <div class="span6">
              <h3>Venda seu carro</h3>
              <img src="<?=base_url()?>applications/portal/views/images/carsale.jpg" alt="Anunciar carro">
              <a class="btn btn-large btn-block btn-success" href="<?=base_url()?>cadastro?tipoPlano=1&redirectURL=<?=base_url()?>admin/novo-anuncio-carro">Anunciar carro &raquo;</a>
            </div><!--/span-->
            <div class="span6">
              <h3>Venda sua moto</h3>
              <img src="<?=base_url()?>applications/portal/views/images/bikesale.jpg" alt="Anunciar carro">
              <a class="btn btn-large btn-block btn-success" href="<?=base_url()?>cadastro?tipoPlano=1&redirectURL=<?=base_url()?>admin/novo-anuncio-moto">Anunciar moto &raquo;</a>
            </div><!--/span-->
          </div>
          <?php
          }
          ?>
        </div>
      </div>
      
      

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <script src="<?=base_url()?>applications/portal/views/js/combo-veiculos.js"></script>

  </body>
</html>

