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
            <h2>Resultado da busca</h2>
          
            <div class="row-fluid resultados-busca">
            <?php
            foreach ($array_busca as $row) {
                  $array_imagens = $this->imagens_anuncio->lista_prateleira($row->TB_Anunciante_id, $row->TB_Anuncio_id);
                  ?>
                  <div class="row-fluid item">
                        <div class="span3">
                              <a href="<?=base_url()?>anuncio/<?=$row->id?>/<?=$row->TB_Anunciante_id?>" class="fotos">
                              <?php
                              if($array_imagens){
                                    $i=1;
                                    foreach ($array_imagens as $image) {
                                    ?>
                                          <div id="foto<?=$i?>">
                                                <img src="http://s3-sa-east-1.amazonaws.com/autocloud.images/thumb_<?=$image->ImageSRC?>">
                                          </div>
                                    <?php
                                    $i++;
                                    }
                              }else{

                              }
                              ?>
                              </a>
                        </div>
                        <div class="span4">
                              <a href="<?=base_url()?>anuncio/<?=$row->id?>/<?=$row->TB_Anunciante_id?>">
                                   <h4 class="titulo"><?=$row->Titulo?> <?=$row->Transmissao?></h4>
                                   <p class="versao"><?=$row->Versao?></p>
                              </a>
                              <p class="preco"><strong>R$ <?=$this->moedas->eua2bra($row->ValorVenda)?></strong></p>
                              <p><a href="<?=base_url()?>anuncio/<?=$row->id?>/<?=$row->TB_Anunciante_id?>">Ver anúncio completo</a></p>
                        </div>
                        <div class="span2">
                              <p class="ano"><strong><?=$row->AnoFab?> / <?=$row->AnoMod?></strong></p>
                              <p class="km"><strong><?=$row->Km?>km</strong></p>
                        </div>
                        <div class="span3 localidade">
                              <p><?=$row->TB_Cidade_Nome?></p>
                              <p><?=$row->TB_Estado_Nome?></p>
                              <p><?=$row->TB_Anunciante_Nome?></p>
                              <p><?=$row->TelContato?></p>
                        </div>
                  </div>
            <?php
            }
            ?>
            

            </div>
        </div>
      </div>
      
      

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <script src="<?=base_url().APPPATH?>views/js/combo-veiculos.js"></script>
    <style type="text/css">
      .resultados-busca .row-fluid{
            padding: 10px 0;
            border-bottom: 1px solid #d1d1d1;
      }
      .resultados-busca .row-fluid > div{
            min-height: 160px;
            padding: 10px 0;
            border-right: 1px solid #d1d1d1;
      }
      .fotos{
            background: #000;
            width: 130px;
            height: 130px;
            padding: 5px 0;
            display: block;
            position: relative;
      }
      .fotos > div{
            width: 50%;
            height: 50%;
            position: absolute;
      }
      .fotos #foto2,
      .fotos #foto4{
            left: 50%
      }
      .fotos #foto3,
      .fotos #foto4{
            top:50%;
      }
      .resultados-busca .titulo,
      .resultados-busca .versao{
            font-size: 14px;
            color: #333;
      }
      .resultados-busca .preco{
            font-size: 20px;
      }

    </style>

  </body>
</html>

