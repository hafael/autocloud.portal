<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <!-- Le styles -->
    <link href="<?=base_url()?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
      .sidebarBusca{
        padding: 10px;
      }
      .sidebarBusca .control-label{
        width: 60px;
      }
      .sidebarBusca .controls{
        margin-left: 70px;
      }
      .sidebarBusca .controls select{
        width: 190px;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?=base_url()?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="bootstrap/ico/favicon.png">
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="brand" href="#">Autocloud</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="home">Home</a></li>
              <li><a href="cadastro">Anunciar</a></li>
              <li><a href="#about">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebarBusca">
            
            <form class="form-search">
              <fieldset>
                <legend>Buscar</legend>
                <label>Marca ou modelo do veículo</label>
                <div class="input-append">
                  <input type="text" class="span9 search-query">
                  <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
              </fieldset>
            </form>
            <hr />
            <!--
            <form class="form-horizontal">
              
              <div class="control-group">
                <label class="control-label" for="marca">Marca</label>
                <div class="controls">
                  <select id="car_brand">
                    <option value="false">Selecione</option>
                    <option disabled></option>
                    <?php
                    foreach ($array_vehicle_brand as $row) {
                      ?>
                      <option value="<?=$row->id?>"  ><?=$row->name?></option>
                      <?php
                    }
                    ?>
                    
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="marca">Modelo</label>
                <div class="controls">
                  <select id="car_model">
                    <option disabled>Selecione</option>
                    <option disabled></option>
                  </select>
                </div>
              </div>
              
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn btn-primary btn-large pull-right">Buscar</button>
                </div>
              </div>
            </form>
            -->
          </div><!--/.well -->
          <div class="well sidebarBusca">
            
            <form id="new_announcement" class="form-horizontal">
              <legend>Inserir Anuncio</legend>
              <div class="control-group">
                <label class="control-label" for="inputEmail">Título</label>
                <div class="controls">
                  <input type="text" id="title" class="span12" placeholder="Titulo">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="car_brand">Marca</label>
                <div class="controls">
                  <select id="car_brand">
                    <option value="false">Selecione</option>
                    <option disabled></option>
                    <?php
                    /*
                    foreach ($array_vehicle_brand as $row) {
                      ?>
                      <option value="<?=$row->id?>"  ><?=$row->Nome?></option>
                      <?php
                    }
                    */
                    
                    ?>
                    
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="car_model">Modelo</label>
                <div class="controls">
                  <select id="car_model">
                    <option disabled>Selecione</option>
                    <option disabled></option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="car_year">Ano</label>
                <div class="controls">
                  <select id="car_year">
                    <option disabled>Selecione</option>
                    <option disabled></option>
                  </select>
                </div>
              </div>
              
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn btn-primary btn-large pull-right">Inserir</button>
                </div>
              </div>
            </form>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Autocloud</h1>
            <h2>The store name</h2>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
          </div>
          <div class="row-fluid">
            <?php
            /*
              foreach ($array_announcements as $row) {
                ?>
                <div class="span4">
                  <h2><?=$row->title?></h2>
                  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                  <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!--/span-->
                <?php
              }
              */
            ?>
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>Autocloud &copy; 2013</p>
      </footer>

    </div><!--/.fluid-container-->
    <input type="hidden" id="store" value="<?=$this->home->id?>">
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

    <script type="text/javascript">


      $.ajax({
          type: 'POST',
          url: 'index.php/vehicles/get_vehicle_brands/',
          success: function (data){
            $.each(data, function(i, fabricante){
              $('#car_brand').append('<option value="'+fabricante.id+'">'+fabricante.Nome+'</option>');
            });
          }
        });


      $('#car_brand').change(function(){
        var car_company_id = $('#car_brand').val();
        $('#car_model').append('<option value="false">Aguarde</option>');
        $('#car_model').empty();
        $.ajax({
          type: 'POST',
          url: 'index.php/vehicles/get_vehicle_models/'+car_company_id,
          success: function (data){
            $('#car_model').append('<option value="false">Selecione</option><option disabled></option>');
            $.each(data, function(i, model){
              $('#car_model').append('<option value="'+model.id+'">'+model.Nome+'</option>');
            });
          }
        });
      });
      $('#car_model').change(function(){
        var car_model_id = $('#car_model').val();
        $('#car_year').append('<option value="false">Aguarde</option>');
        $('#car_year').empty();
        $.ajax({
          type: 'POST',
          url: 'index.php/vehicles/get_vehicle_years/'+car_model_id,
          success: function (data){
            $('#car_year').append('<option value="false">Selecione</option><option disabled></option>');
            $.each(data, function(i, year){
              $('#car_year').append('<option value="'+year.id+'">'+year.name+'</option>');
            });
          }
        });
      }); 
      $('#new_announcement button[type="submit"]').click(function(){
        var store_id = $('input#store').val();
        var title = $('#new_announcement #title').val();
        var car_company_id = $('#new_announcement #car_brand').val();
        var car_model_id = $('#new_announcement #car_model').val();
        var car_year_fabrication_id = $('#new_announcement #car_year').val();
        
        $.ajax({
          type: 'POST',
          data: {
            store_id: store_id,
            title: title,
            car_company_id: car_company_id,
            car_model_id: car_model_id,
            car_year_fabrication_id: car_year_fabrication_id
          },
          url: 'index.php/start/new_annoucement/',
          success: function (data){
            alert(data.status);
          }
        });
        return false;
      });    
    </script>

  </body>
</html>
