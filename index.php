<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>El buen contribuyente</title>

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

    <title>El buen contribuyente</title>
    <script type="text/javascript">
      $(window).on('load',function(){
      $('#myModal0').modal('show');
      });
    </script>

  </head>

  <body>

    <!-- Static navbar -->
	<!--<div id="headerwrap">
	    <div class="container">
			<div class="row header">
				<div class="col-lg-9 col-lg-offset-3">
					<h4>Aplicaciones y soluciones para el</h4>
					<h1>CONTRIBUYENTE</h1>
					<h4>Genera formularios de pagos a la SUNAT, facturas empresariales y mas.</h4>
				</div>
			</div>
	    </div> 
	</div>-->
	
	<div id="headerwrap">
			<div class=" headerc" >

				<img src="imagenes/BUENCONTRI.png" />
			</div>
	    <div class="container">

			<div class="row">
				<div class="col-lg-8 col-lg-offset-3">
					<h4>Aplicaciones y soluciones para el</h4>
					<h1>CONTRIBUYENTE</h1>
					<h4>Genera formularios de pagos a la SUNAT, facturas empresariales y mas.</h4>
				</div>
			</div><!--/row -->
	    </div> <!-- /container -->
	</div>

	<section id="works"></section>
	<div class="container">
		<div class="row mt mb centro">
			<h1>DOCUMENTOS GENERADOS</h1>
			
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

		</div>
		<div class="row centered mt mb">
			<h1 style="font-weight: 700;">APPS</h1>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery ">
				<a data-toggle="modal" data-target="#myModal6"><img src="assets/img/portfolio/folio01.png" class="img-responsive"></a>
				<h3>Conversor de moneda</h3>			
				  <?php $Vdata = file_get_contents('apps/conversor.php'); 
	    			echo($Vdata);
	    			?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal7"><img src="assets/img/portfolio/folio02.png" class="img-responsive"></a>
				<h3>Calculadora</h3>			
				<?php $Vdata = file_get_contents('apps/calc.php'); 
	    			echo($Vdata);
	    			?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal8"><img src="assets/img/portfolio/folio03.png" class="img-responsive"></a>
				<h3>Calendario de SUNAT</h3>
				<?php $Vdata = file_get_contents('apps/calendario.php'); 
	    			echo($Vdata);
	    			?>			
			</div>
			
		</div>
	</div>

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
