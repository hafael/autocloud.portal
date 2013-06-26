<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?=base_url()?>">Autocloud</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="<?=base_url()?>">Home</a></li>
          <li><a href="<?=base_url()?>anunciar">Anunciar</a></li>
          <li><a href="<?=base_url()?>contato">Contato</a></li>
        </ul>
        <ul class="nav pull-right">
          
          
          <?php 
            if($this->anunciante->logged()){
              ?>
              <li><a href="<?=base_url()?>admin/novo-anuncio">Criar um anúncio</a></li>
              <li class="divider-vertical"></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->anunciantePF->nome_anunciante?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?=base_url()?>admin/meus-dados">Meus dados</a></li>
                  <li><a href="<?=base_url()?>admin/alterar-senha">Alterar senha</a></li>
                  <li class="divider"></li>
                  <li><a href="<?=base_url()?>logout">Sair</a></li>
                </ul>
              </li>
              <?php
            }else{
              ?>
              <li><a href="<?=base_url()?>cadastro">Cadastre-se</a></li>
              <li class="divider-vertical"></li>
              <li><a href="<?=base_url()?>login?redirectURL=<?=current_url()?>">Login</a></li>
              <?php
            }
          ?>
          
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>