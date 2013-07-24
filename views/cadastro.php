<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Anuncie no Autocloud</h1>
      <div class="row-fluid dados-cadastro">
          <form id="cadastro" class="form-horizontal span8" method="POST" action="<?=base_url().'cadastro/novocadastro/'.$this->input->get('tipoPlano').'/'?>">
            <legend>Informe seus dados </legend>
            
            <div class="control-group visible">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="text" id="email" name="email" class="span10" placeholder="Seu e-mail">
              </div>
            </div>
            <div class="control-group verifica-email visible">
              <label class="control-label"></label>
              <div class="controls">
                <a class="btn btn-large btn-primary disabled" href="#">Prosseguir &raquo;</a>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="nome">Nome</label>
              <div class="controls">
                <input type="text" id="nome" name="nome" class="span10" placeholder="Seu nome">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="senha">Senha</label>
              <div class="controls">
                <input type="password" id="senha" name="senha" class="span6" placeholder="Escolha uma senha">
                <div class="help-inline"><label for="mostrar-digitos"><input type="checkbox" id="mostrar-digitos"> Mostrar dígitos</label></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="resenha">Re-digite</label>
              <div class="controls">
                <input type="password" id="resenha" name="resenha" class="span6" placeholder="Re-digite a senha acima">
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="hidden" id="tipoPlano" name="tipoPlano" value="<?=$this->input->get('tipoPlano')?>">
                <button type="submit" class="btn btn-primary btn-large">Prosseguir &raquo;</button>
              </div>
            </div>
            
          </form>
          <form id="login" class="form-horizontal span8" method="POST">
            <legend>E-mail já cadastrado</legend>
            <p class="lead">Faça o login para prosseguir</p>
            <div class="control-group visible">
              <label class="control-label" for="loginEmail">E-mail</label>
              <div class="controls">
                <input type="text" id="loginEmail" name="loginEmail" class="span10" placeholder="Seu e-mail">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="loginSenha">Senha</label>
              <div class="controls">
                <input type="password" id="loginSenha" name="loginSenha" class="span6" placeholder="Sua senha">
                <div class="help-inline"><label for="mostrar-digitos"><input type="checkbox" id="mostrar-digitos"> Mostrar dígitos</label></div>
                <div class="help"><a href="#">Esqueci minha senha</a></div>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large">Prosseguir &raquo;</button>
              </div>
            </div>
            
          </form>

          <?php if($this->input->get('tipoPlano')){ ?>
          <div class="span4 well">
            
            <h3>Plano escolhido</h3>
            <?php if($this->input->get('tipoPlano')==1){ ?>
            <p class="lead">Gratuito <span>R$ 0,00</span></p>
            <ul>
              <li><p>4 imagens por anúncio</p></li>
              <li><p>1 anúncio por vez</p></li>
              <li><p>10% de relevância no resultado das buscas</p></li>
              <li><p>30 dias de periodicidade</p></li>
            </ul>
            <?php }else if($this->input->get('tipoPlano')==2){ ?>
            <p class="lead">Premium <span>R$ 19,90</span></p>
            <ul>
              <li><p>4 imagens por anúncio</p></li>
              <li><p>1 anúncio por vez</p></li>
              <li><p>10% de relevância no resultado das buscas</p></li>
              <li><p>30 dias de periodicidade</p></li>
            </ul>
            <?php }else if($this->input->get('tipoPlano')==3){ ?>
            <p class="lead">Lojista <span>R$ 59,90</span></p>
            <ul>
              <li><p>4 imagens por anúncio</p></li>
              <li><p>1 anúncio por vez</p></li>
              <li><p>10% de relevância no resultado das buscas</p></li>
              <li><p>30 dias de periodicidade</p></li>
            </ul>
            <?php }else{ ?>
            <p class="lead">Plano não encontrado</p>
            <?php } ?>
            <a class="btn btn-large pull-right trocar-plano" href="anunciar">Trocar plano &raquo;</a>
          </div><!--/span-->
          <?php } ?>

      </div><!--/row-->

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <script src="<?=base_url().APPPATH?>/views/js/scripts-cadastro.js"></script>

  </body>
</html>

