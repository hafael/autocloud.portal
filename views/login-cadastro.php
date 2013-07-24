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
        <div class="span5 well buscar-veiculo">
          <h3>Já sou cadastrado</h3>
          <form class="form-horizontal" method="POST">
            <legend class="lead">Faça o login para prosseguir</legend>
            <?php if($erro_login==true){
              ?>
              <div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Opss!</strong> E-mail ou senha não conferem.
              </div>
              <?php

            } ?>
            <div class="control-group visible">
              <label class="control-label" for="loginEmail">E-mail</label>
              <div class="controls">
                <input type="text" id="loginEmail" name="loginEmail" class="span12" placeholder="Seu e-mail">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="loginSenha">Senha</label>
              <div class="controls">
                <input type="password" id="loginSenha" name="loginSenha" class="span12" placeholder="Sua senha">
                <div class="help pull-right"><a href="#">Esqueci minha senha</a></div>
              </div>
            </div>

            
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large pull-right">Logar &raquo;</button>
              </div>
            </div>
          </form>
        </div>
        <div class="span7">
          <h3>Quero me cadastrar</h3>
          <form id="cadastro" class="form-horizontal dados-cadastro" method="POST">
            <div class="control-group">
              <label class="control-label" for="nome">Nome</label>
              <div class="controls">
                <input type="text" id="nome" name="nome" class="span8" placeholder="Seu nome">
                <span class="help-inline"><small>Nome e sobrenome</small></span>
              </div>
            </div>
            <div class="control-group email">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="text" id="email" name="email" class="span8" placeholder="Seu e-mail">
                <span class="help-inline valid"><i class="icon-ok"></i> <small> E-mail válido</small></span>
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> E-mail inválido</small></span>
                <span class="help-inline joined"><i class="icon-minus-sign"></i> <small> E-mail já cadastrado</small></span>
              </div>
            </div>
            <div class="control-group senha">
              <label class="control-label" for="senha">Senha</label>
              <div class="controls">
                <input type="password" id="senha" name="senha" class="span8" placeholder="Escolha uma senha">
                <div class="help-inline"><label for="mostrar-digitos"><input type="checkbox" id="mostrar-digitos"> Mostrar dígitos</label></div>
              </div>
            </div>
            <div class="control-group resenha">
              <label class="control-label" for="resenha">Re-digite</label>
              <div class="controls">
                <input type="password" id="resenha" name="resenha" class="span8" placeholder="Re-digite a senha acima">
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> Senhas não conferem.</small></span>
              </div>
            </div>
            <div class="control-group estado">
              <label class="control-label" for="estado">Estado</label>
              <div class="controls">
                <select id="estado" name="estado" class="span8">
                  <option></option>
                </select>
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> Informe seu estado.</small></span>
              </div>
            </div>
            <div class="control-group cidade">
              <label class="control-label" for="cidade">Cidade</label>
              <div class="controls">
                <select id="cidade" name="cidade" class="span8" disabled>
                  <option></option>
                </select>
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> Informe sua cidade.</small></span>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="hidden" id="TipoAnunciante" name="TipoAnunciante" value="1" alt="TipoAnunciante">
                <input type="hidden" id="EstadoText" name="EstadoText" value="" alt="Estado">
                <input type="hidden" id="CidadeText" name="CidadeText" value="" alt="Cidade">
                <button type="submit" class="btn btn-primary btn-large pull-right">Prosseguir &raquo;</button>
              </div>
            </div>
          </form>
          
          
        </div>
      </div>
      
      

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <script src="<?=base_url()?>applications/portal/views/js/combo-estados-cidades.js"></script>
    <script src="<?=base_url()?>applications/portal/views/js/scripts-cadastro.js"></script>

  </body>
</html>

