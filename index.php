<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>INSTANT - Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/estilo.css">	

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="estilos/estilo_switch.css"> <!-- switch de vane -->
    <script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">INSTANT</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="#works">Works</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4>HELLO PEOPLE, MY NAME IS</h4>
					<h1>PAUL SILVA</h1>
					<h4>WEB DESIGNER, DEVELOPER & GAME ADDICT</h4>
				</div>
			</div><!--/row -->
	    </div> <!-- /container -->
	</div><!--/headerwrap -->
	
	<section id="works"></section>
	<div class="container">
		<div class="row mt mb centro">
			<h1>Documentos Generados</h1>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal1"><img src="imagenes/pagosvarios.jpg" class="img-responsive"></a>
				<h3>Guia Pagos Varios</h3>
				<?php $Vdata = file_get_contents('guias/pv/from_guiapv.php'); 
				    echo($Vdata);
				?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal3"><img src="imagenes/arrenda.jpg" class="img-responsive"></a>
				<h3>Guía Para Arrendamiento</h3>
				<?php $Vdata = file_get_contents('guias/arrenda/from_arrenda.php'); 
					echo($Vdata);
				?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal2"><img src="imagenes/nr.jpg" class="img-responsive"></a>
				<h3>Guía Pago Fácil Nuevo Régimen Único Simplificado</h3>
				<?php $Vdata = file_get_contents('guias/nuevoreg/from_nuevoreg.php'); 
				    echo($Vdata);
				?>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 gallery"></div>

			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal4"><img src="imagenes/factura.jpg" class="img-responsive"></a>
				<h3>Generador de Factura</h3>
				<?php $Vdata = file_get_contents('guias/factura/from_factura.php'); 
			    	echo($Vdata);
			    ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal5"><img src="imagenes/honorarios.jpg" class="img-responsive"></a>
				<h3>Recibo por Honorarios</h3>
				<?php $Vdata = file_get_contents('guias/honorarios/from_honorario.php'); 
				    echo($Vdata);
				?>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 gallery"></div>

		</div><!--/row -->
	</div><!--/container -->
	
	<div id="social">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-dribbble"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			
			</div><!--/row -->
		</div><!--/container -->
	</div><!--/social -->

	<div id="footerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<p><b>WEB DESIGNER, DEVELOPER & GAME ADDICT</b></p>
				</div>
			
				<div class="col-lg-4">
					<p>Living in the amazing London.</p>
				</div>
				<div class="col-lg-4">
					<p>hello@instant.com</p>
				</div>
			</div>
		</div>
	</div><!--/footerwrap -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
