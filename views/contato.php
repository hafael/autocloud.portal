<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>
    <?php include_once('includes/navbar.php') ?>

    <div class="container contato">
      <h1>Entre em contato</h1>
      <p class="lead">Preencha o formulário e em breve responderemos.</p>
      <div class="row-fluid">
        <form class="form-horizontal span5 form-contato" method="POST" action="<?=base_url()?>contato/enviar">
          <div class="control-group">
            <label class="control-label" for="nome">Seu nome</label>
            <div class="controls">
              <input type="text" class="span12" id="nome" name="nome">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Seu Email</label>
            <div class="controls">
              <input type="text" class="span12" id="email" name="email">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Assunto</label>
            <div class="controls">
              <select class="span8" id="assunto" name="assunto" >
                <option>Selecione</option>
                <option value="Anúncios">Anúncios</option>
                <option value="Publicidade">Publicidade</option>
                <option value="Erro encontrado">Reportar um erro</option>
                <option value="Outro">Outro</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">Mensagem</label>
            <div class="controls">
              <textarea class="span12" id="mensagem" name="mensagem"></textarea>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </div><!--/row-->

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>

  </body>
</html>

