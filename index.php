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
	<style>
		@media only screen and (max-width: 700px) {
			#hora{
				visibility: hidden;
			}
		}
	</style>

	<div id="headerwrap">
			<div class=" headerc" >

				<a href="javascript:location.reload()"><img src="imagenes/BUENCONTRI.png" /></a>
				<!--<iframe width="320" height="47" scrolling="no" src="http://pagina-del-dia.euroresidentes.es/gadget-dia-de-hoyH.php?fondo=&texto=FFFFFF" frameborder="0"></iframe>
				<iframe width="200" height="200" scrolling="no" src="http://pagina-del-dia.euroresidentes.es/gadget-dia-de-hoy.php?fondo=&texto=FFFFFF" frameborder="0"></iframe>
				-->
				<iframe id="hora" src="http://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&timezone=America%2FLima" width="300"  frameborder="0" seamless style="float: right; margin-top: -25px;"></iframe>
			</div>
	    <div class="container">

			<div class="row">
				<div class="col-lg-8 col-lg-offset-3">
					<h4>Aplicaciones y soluciones para el</h4>
					<h1>CONTRIBUYENTE</h1>
					<h4>Genera formularios de pagos a la SUNAT, facturas empresariales y mas.</h4>
				</div>
			</div>
	    </div> 
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
			<h1 style="font-weight: 700; font-family: 'Montserrat', sans-serif;">APLICACIONES</h1>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery ">
				<a data-toggle="modal" data-target="#myModal6"><img src="imagenes/conversor.jpg" class="img_redonda"></a>
				<h3>Conversor de moneda</h3>			
				  <?php $Vdata = file_get_contents('apps/conversor.php'); 
	    			echo($Vdata);
	    			?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal7"><img src="imagenes/calculadora.jpg" class="img_redonda"></a>
				<h3>Calculadora Tributaria</h3>			
				<?php $Vdata = file_get_contents('apps/calc.php'); 
	    			echo($Vdata);
	    			?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a data-toggle="modal" data-target="#myModal8"><img src="imagenes/calendario.jpg" class="img_redonda"></a>
				<h3>Calendario de SUNAT</h3>
				<?php $Vdata = file_get_contents('apps/calendario.php'); 
	    			echo($Vdata);
	    			?>			
			</div>
			
		</div>
	</div>

	<div id="footerwrap" style="text-align: center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<p><b>La web a la que todo buen contribuyente debe acceder.</b></p>
					<a href="javascript:location.reload()"><img style="height: 80px;" src="imagenes/BUENCONTRI.png" /></a>
				</div>
			
				<div class="col-lg-4">
					<div ><h4 style="color: white;">Siguenos en:</h4>
					<a href="http://www.facebook.com" target="_blank"><i style="font-size: 40px;" class="fa fa-facebook"></i></a>
				</div>
				</div>
				<div class="col-lg-4">
					<p>Comentarios y sugerencias a: sugerencias@elbuencontribuyente.com</p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<p>Web desarollada por <a href="http://www.multiviral.com.pe" target="_blank">MultiViral</a></p>
			</div>
		</div>
	</div><!--/footerwrap -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
	   var myFunc = function() {
	   	 $("#captcha_img").attr("src", "http://www.sunat.gob.pe/cl-ti-itmrconsruc/captcha?accion=image");
     }

	   $('#refresh,#captcha_img').click(function() {
	   	   setTimeout(myFunc, 2000);
    });

    </script>
  </body>
</html>

<!-- $('#refresh,#captcha_img').click(function() {
	   	 $("#captcha_img").delay(5000).attr("src", "http://www.sunat.gob.pe/cl-ti-itmrconsruc/captcha?accion=image");
    });
-->