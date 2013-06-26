<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>
    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Anuncie no Autocloud</h1>
      <p class="lead">Escolha um plano para continuar</p>
      <div class="row-fluid seleciona-planos">
        <div class="span4">
          <h2>Gratuito <span>R$ 0,00</span></h2>
          <p>Plano para pessoas físicas que desejam anunciar o veículo, sem se preocupar com estatísicas.</p>
          <ul>
            <li><p>4 imagens por anúncio</p></li>
            <li><p>10% de relevância no resultado das buscas</p></li>
            <li><p>30 dias de periodicidade</p></li>
          </ul>
          <a class="btn btn-large btn-primary" href="cadastro?tipoPlano=1">Selecionar &raquo;</a>
        </div><!--/span-->
        <div class="span4">
          <h2>Premium <span>R$ 19,90</span></h2>
          <p>Plano para pessoas físicas que se preocupam com estatísicas, desejam dar mais enfase no resultado de busca.</p>
          <ul>
            <li><p>6 imagens por anúncio</p></li>
            <li><p>40% de relevância no resultado das buscas</p></li>
            <li><p>60 dias de periodicidade</p></li>
          </ul>
          <a class="btn btn-large btn-primary" href="cadastro?tipoPlano=2">Selecionar &raquo;</a>
        </div><!--/span-->
        <div class="span4">
          <h2>Lojista <span>R$ 59,90</span></h2>
          <p>Plano para pessoas jurídicas que trabalham com multiplos anuncios. As estatísticas podem ser consultadas a qualquer momento.</p>
          <ul>
            <li><p>6 imagens por anúncio</p></li>
            <li><p>50% de relevância no resultado das buscas</p></li>
            <li><p>Anúncio permanece até vender</p></li>
          </ul>
          <a class="btn btn-large btn-primary" href="cadastro?tipoPlano=3">Selecionar &raquo;</a>
        </div><!--/span-->
      </div><!--/row-->

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>

  </body>
</html>

