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
            <?php include_once('includes/form-busca-sidebar.php') ?>
        </div>
        <div class="span8">
          <h2>Venda seu veículo</h2>
          <p class="lead">No Autocloud, em poucos passos você anuncia seu veículo <strong>gratuitamente</strong></p>
          <?php 
          if($this->anunciante->logged()){
          ?>
          <div class="row-fluid home-planos">
            <div class="span6">
              <h3>Venda seu carro</h3>
              <a href="http://admin.autocloud.com.br/novo-anuncio-carro">
                  <img src="<?=base_url().APPPATH?>views/images/carsale.jpg" alt="Anunciar carro">
              </a>
              <a class="btn btn-large btn-block btn-success" href="http://admin.autocloud.com.br/novo-anuncio-carro" alt="Anunciar carro" title="Anunciar carro">Anunciar carro &raquo;</a>
            </div><!--/span-->
            <div class="span6">
              <h3>Venda sua moto</h3>
              <a href="http://admin.autocloud.com.br/novo-anuncio-moto">
                  <img src="<?=base_url().APPPATH?>views/images/bikesale.jpg" alt="Anunciar moto">
              </a>
              <a class="btn btn-large btn-block btn-success" href="http://admin.autocloud.com.br/novo-anuncio-moto" alt="Anunciar moto" title="Anunciar moto">Anunciar moto &raquo;</a>
            </div><!--/span-->
          </div>
          
          <?php
          }else{
          ?>
          <div class="row-fluid home-planos">
            <div class="span6">
              <h3>Venda seu carro</h3>
              <a href="http://admin.autocloud.com.br/cadastro">
                  <img src="<?=base_url().APPPATH?>views/images/carsale.jpg" alt="Anunciar carro">
              </a>
              <a class="btn btn-large btn-block btn-success" href="http://admin.autocloud.com.br/cadastro" alt="Anunciar carro" title="Anunciar carro">Anunciar carro &raquo;</a>
            </div><!--/span-->
            <div class="span6">
              <h3>Venda sua moto</h3>
              <a href="http://admin.autocloud.com.br/cadastro">
                  <img src="<?=base_url().APPPATH?>views/images/bikesale.jpg" alt="Anunciar moto">
              </a>
              <a class="btn btn-large btn-block btn-success" href="http://admin.autocloud.com.br/cadastro" alt="Anunciar moto" title="Anunciar moto">Anunciar moto &raquo;</a>
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
    <script src="<?=base_url().APPPATH?>views/js/combo-veiculos.js"></script>

  </body>
</html>

