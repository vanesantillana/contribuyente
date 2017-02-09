<?php
	$archivo = "contador.txt";
$contador = 0;

$fp = fopen($archivo,"r");
$contador = fgets($fp, 26);
fclose($fp);

$contador=$contador+1;

$fp = fopen($archivo,"w+");
fwrite($fp, $contador, 26);
fclose($fp);
 
if (!isset($_POST['email'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="estilo.css">	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>El buen contribuyente</title>
    <script type="text/javascript">
    	$(window).on('load',function(){
        	$('#myModal0').modal('show');
    });
	</script>

	<style>
	.captcha img{
		width: 120px;
		height: 80px;
	}
		@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');
		input[type="checkbox"] {
		    /* IE opacity hacks */
		    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		    filter: alpha(opacity=0);
		    opacity: 0;
		    margin-left: 100px;
		}
		.cb-label {
		    position: relative;
		}
		.cb-label:before {
		    content: ' ';
		    position: absolute;
		    background: transparent url(imagenes/switch2.png) no-repeat scroll 0 0;
		    height: 40px;
		    width: 120px;
		    left: 5px;
		}
		input[type="checkbox"]:checked ~ .cb-label:before,
		/* the .checked class is used by IE only */
		input[type="checkbox"].checked ~ .cb-label:before {
		    background-position: 0 -40px;
		}
	</style>
  </head>
  <body>
  	<div class="container">
  	  <div class="modal fade" id="myModal0" role="dialog">
	    <div class="modal-dialog modal-sm">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="background-color:#0b5394">
	          <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
	          <h3 class="modal-title" style="color:#FFFFFF" align="center"><strong>¡Suscríbete aquí!</strong></h3>
			</div>
			<div class="modal-body">
				<form action='<?=$_SERVER['PHP_SELF']?>' method='post' name='sentMessage' id='contactForm' novalidate>
				<label class=''>Correo electronico:</label>
				<input type='' class='form-control' name='email' placeholder='ejemplo@ejemplo.com' id='email' required data-validation-required-message='No ingresaste tu correo.'>
				<p class='help-block'></p>
			</div>
			<div class="modal-footer">
				<button type='submit' class='btn btn-primary'>Suscribirse</button>
			</div>
	      </div>
	      
	    </div>
	  </div>
	</div>
    <div  class="container-fluid base">
      <div class="col-md-12 sec1">
		 <hr style="visibility: hidden;">

		<img src="imagenes/BUENCONTRI.png" class="estilo_bootstrap" />
		<ul class="nav navbar-nav navbar-right">
		  <div class="col-sm-3 col-md-12">
		    <div id="TT_RiJAbBdBd2dBd8hA7AzDjDzzDWl1LAdFLtEtEZyIKEjI3omIm">Pronóstico de Tutiempo.net</div>
		    <script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_RiJAbBdBd2dBd8hA7AzDjDzzDWl1LAdFLtEtEZyIKEjI3omIm"></script>
		  </div>
		</ul>
        <hr style="visibility: hidden;">
      </div>
      
      <div class="col-md-12 sec2">
		<nav class="navbar navbar-bar" style="background-color: black">
		  <div class="container-fluid">
			  <ul class="nav navbar-nav">
				  <li class="active"><a href="#">Inicio</a></li>
				  <li><a href="#">Nosotros</a></li>
				  <li><a href="#">Publicaciones</a></li>
				  <li><a href="#">Noticias</a></li>
				  <li><a href="#">Contacto</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
			    	<button type="button" style="background-color:#0b5394;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal0">Suscribete</button>
			  </ul>
			</div>
		</nav>
      </div>
      <div class="container-fluid principal">
	<div class="col-md-8 banner">
	  <img src="imagenes/ttttt.png" alt="" class="">
	  <div class="tutorial ">
	    <div class="box-title">
	      
	      <h2 class="">Tutoriales y cursos online</h2>
	    </div>
	    <div class="row">
	      <div class="col-md-6">
		<div class="row">
		  <div class="col-md-4 rthumbc">
		    <img src="imagenes/ttttt.png" alt="">
		  </div>
		  <div class="col-md-6">
		    <a href="">Carreras técnicas pagan más que las universitarias con mayor presencia en el mercado</a>
		    <span class="info">seccion 1</span>
		    <span class="info">seccion 2</span>			
		  </div>
		</div>

	      </div>
	      <div class="col-md-6">
	        <div class="row">
		  <div class="col-md-4 rthumbc">
		    <img src="imagenes/ttttt.png" alt="">
		  </div>
		  <div class="col-md-6">
		    <a href="">Carreras técnicas pagan más que las universitarias con mayor presencia en el mercado</a>
		    <span class="info">seccion 1</span>
		    <span class="info">seccion 2</span>			
		  </div>
		</div>
	      </div>
	      <div class="col-md-6">
	        <div class="row">
		  <div class="col-md-4 rthumbc">
		    <img src="imagenes/ttttt.png" alt="">
		  </div>
		  <div class="col-md-6">
		    <a href="">Carreras técnicas pagan más que las universitarias con mayor presencia en el mercado</a>
		    <span class="info">seccion 2</span>			
		  </div>
		</div>
	      </div>
	    </div>
	  </div>
<!--
	  <div class="noticias">
	    
	    <div class="box-title">
	      
	      <h2 class="">Tutoriales</h2>
	    </div>
	    <div class="row">
	      <div class="col-md-12">
	    	<div class="row">
		  <div class="col-md-6 rthumbc">
		    <img src="img/ttttt.png" alt="">
		  </div>
		  <div class="col-md-6">
		    <h3 class="">titulo de notica</h3>
		    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor necessitatibus quidem minima id, optio odio exercitationem</p>
		  </div>
		</div>	
	      </div>
	      <div class="col-md-6">
		<div class="row">
		  <div class="col-md-4 rthumbc">
		    <img src="img/ttttt.png" alt="" class="">
		  </div>
		  <div class="col-md-6">
		    <h3 class="">titulo de notica</h3>
		    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor necessitatibus quidem minima id, optio odio exercitationem</p>
		  </div>
		</div>
	      </div>
	      <div class="col-md-6">
		<div class="row">
		  <div class="col-md-4 rthumbc">
		    <img src="img/ttttt.png" alt="" class="">
		  </div>
		  <div class="col-md-6">
		    <h3 class="">titulo de notica</h3>
		    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor necessitatibus quidem minima id, optio odio exercitationem</p>
		  </div>
		</div>
	      </div>
	    </div>
	  </div> -->
	
	  <div class="posts">
	    <div class="box-title">      
	      <h2 class="">Post recientes</h2>
	    </div>  
	    <div class="row">
	      <div class="col-md-12">
	    	<div class="row">
		  <div class="col-md-6 rthumbc">
		    <img src="imagenes/ttttt.png" alt="" class="">
		  </div>
		  <div class="col-md-6">
		    <a class="">titulo de publicacion</a>
		    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor necessitatibus quidem minima id, optio odio exercitationem</p>
		    <span class="info">seccion 1</span>
		    <span class="info">seccion 2</span>		
		  </div>
		</div>	
	      </div>
	      <div class="col-md-12">
	    	<div class="row">
		  <div class="col-md-6 rthumbc">
		    <img src="imagenes/ttttt.png" alt="" class="">
		  </div>
		  <div class="col-md-6">

		    <a class="">titulo de publicacion</a>
		    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor necessitatibus quidem minima id, optio odio exercitationem</p>
		    <span class="info">seccion 1</span>
		    <span class="info">seccion 2</span>		

		  </div>
		</div>	
	      </div>
	      <div class="col-md-12">
	    	<div class="row">
		  <div class="col-md-6 rthumbc">
		    <img src="imagenes/ttttt.png" alt="" class="">
		  </div>
		  <div class="col-md-6">

		    <a class="">titulo de publicacion</a>
		    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor necessitatibus quidem minima id, optio odio exercitationem</p>
		    <span class="info">seccion 1</span>
		    <span class="info">seccion 2</span>		
		 
		  </div>
		</div>	
	      </div>
	      <div class="col-md-12">
	    	<div class="row">
		  <div class="col-md-6 rthumbc">
		    <img src="imagenes/ttttt.png" alt="" class="">
		  </div>
		  <div class="col-md-6">
		      <a class="">titulo de publicacion</a>
		    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor necessitatibus quidem minima id, optio odio exercitationem</p>
		    <span class="info">seccion 1</span>
		    <span class="info">seccion 2</span>	
		  		  </div>
		</div>	
	      </div>
	      
	      
	    </div>
	  </div>
	  <div class="videos">
	    <div class="box-title">
	      
	      <h2 class="">Tutoriales</h2>
	    </div>
	    <div class="row">
	      <div class="col-md-4 rthumbc">
		<img src="imagenes/ttttt.png" alt="" class="">
	      </div>
	      <div class="col-md-4 rthumbc">
		<img src="imagenes/ttttt.png" alt="" class="">
	      </div>
	      <div class="col-md-4 rthumbc">
		<img src="imagenes/ttttt.png" alt="" class="">
	      </div>	      				
	    </div>
	  </div>
	</div>

	<div class="col-md-4 banner">
	  <div class="row">
	    <div class="col-md-12 rthumbc">
	      <img src="imagenes/ttttt.png" alt="" class="">
	    </div>
	    <div class="publicacion">
			  

		</div>
		<div class="col-md-12">
		  <h2>Indicadores</h2>
		  <!-- DolarWeb IndMin Start -->
		  <div id="IndicadoresMin"><h2><a href="http://dolar.wilkinsonpc.com.co/">Dolar Hoy Peru</a></h2></div><script type="text/javascript" src="http://dolar.wilkinsonpc.com.co/widgets/gratis/indicadores-economicos-min.js?ancho=170&alto=85&fondo=transparent&fsize=10&ffamily=sans-serif&fcolor=000000"></script><!-- DolarWeb IndMin End -->
		</div>
		<div class="col-md-12">
			<h2>Formatos</h2><br>		
		    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal1">Guía Pagos Varios</button><br>
		    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal3">Guía Para Arrendamiento</button><br>
		    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal2">Guía Pago Fácil Nuevo Régimen Único Simplificado</button><br>
		    
		    <!-- Modal Pagos Varios -->
			<div class="modal fade" id="myModal1" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <div class="modal-content">
			        <div class="modal-header" style="background-color:#0b5394">
			          <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Guía Pagos Varios</strong></h4>
			        </div>
			        <div class="modal-body">
			          <div>
			          	<form role="form" method="post" action="guias/pv/guiapv.php" target="_blank">
				           <div id="row">
				           <h4><b>Datos Necesarios Para Realizar El Pago En Todos Los Casos</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-user"></span> N° de RUC:</label>
				              <input type="text" class="form-control" id="mi-ruc" placeholder="XXXXXXXXXXX">
				            </div>

				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-calendar"></span> Periodo:</label>
				              <input type="text" class="form-control"  id="mi-periodo" placeholder="2017">
				            </div>

				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-calendar-o"></span> Mes:</label>
				              <select class="form-control" name="mes">
								      <option value="01">Enero</option>
								      <option value="02">Febrero</option>
								      <option value="03">Marzo</option>
								      <option value="04">Abril</option>
								      <option value="05">Mayo</option>
								      <option value="06">Junio</option>
								      <option value="07">Julio</option>
								      <option value="08">Agosto</option>
								      <option value="09">Septiembre</option>
								      <option value="10">Octubre</option>
								      <option value="11">Noviembre</option>
								      <option value="12">Diciembre</option>
								</select>
				            </div>
				          </div>

				          <div id="row">
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-list-alt"></span> Código Tributo ó Multa:</label>
				              <input type="text" class="form-control" id="mi-codigo" placeholder="XXXX">
				            </div>

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-money"></span> Importe a Pagar:</label>
				              <input type="text" class="form-control"  id="mi-importe" placeholder="0">
				            </div>

				          </div>
							<div class="row">
							  <h4><b>&nbsp;&nbsp;&nbsp;Marque lo que Desea Pagar</b></h4>
							  <div class="col-md-3">
							  	<label ><span class="fa fa-toggle-off"></span>Tributo</label><br>
							  	<input id="tributo" type="checkbox" name="tributo" checked="checked" />
				            	<label for=tributo class=cb-label></label>
				            	<hr style="visibility: hidden;">
				     
							  </div>
							  <div class="col-md-3">
							  	<label ><span class="fa fa-toggle-off"></span> Multas</label><br>
							  	<input id="multas" type="checkbox" name="multas"/>
					            <label for=multas class=cb-label></label>
					            <hr style="visibility: hidden;">
							  </div>
							  <div class="col-md-3">
								<label ><span class="fa fa-toggle-off"></span> Costas y Gastos</label><br>
								<input id="gastos" type="checkbox" name="gastos"/>
					            <label for=gastos class=cb-label></label>
					            <hr style="visibility: hidden;">
							  </div>
							  
							  <div class="col-md-3">
							  	<label ><span class="fa fa-toggle-off"></span>Fraccionamientos</label><br>
							  	<input id="frac" type="checkbox" name="frac"/>
				            	<label for=frac class=cb-label></label>
				            	<hr style="visibility: hidden;">
							  </div>
							</div>				
				          <div id="row">
				          	
				           <h4><b>Datos Adicionales Por Tipo de Pago</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-external-link"></span> Tributo Asociado a la Multa:</label>
				              <input type="text" class="form-control" id="m-t-asociado" placeholder="XXXX">
				            </div>

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-external-linkr"></span> N° del Fraccionamiento:</label>
				              <input type="text" class="form-control"  id="mi-t-fraccionamiento" placeholder="XXXXXXXXXXXXXX">
				            </div>				  
				          </div>
				          <div class="row">
			                    <div class="col-md-11 col-sm-12 col-xs-12 form-group">
			                        <input class='navbar-right btn btn-primary' style="color: #FFF; background-color: #0b5394" size="100" type="submit" value="Generar PDF" />			                     
			                    </div>
			            	</div>
				        </form> 
					  </div>
			        </div>
			      </div>
			      
			    </div>
			</div>
			<!-- Modal Nuevo Regimen -->
			<div class="modal fade" id="myModal2" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <div class="modal-content">
			        <div class="modal-header" style="background-color:#0b5394">
			          <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Guía Pago Fácil Nuevo Régimen Único Simplificado</strong></h4>
			        </div>
			        <div class="modal-body">
			          <div>
			          	<form name="formulario" method="post" action="guias/formato.php" target="_blank">
					      <div id="row">
				           <h4><b>Datos Necesarios</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-user"></span> N° de RUC:</label>
				              <input type="text" name="ruc" class="form-control" id="mi-ruc" placeholder="XXXXXXXXXXX">
				            </div>

				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-calendar"></span> Periodo:</label>
				              <input type="text" name="anio" class="form-control"  id="mi-periodo" placeholder="2017">
				            </div>

				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-calendar-o"></span> Mes:</label>
				              <select class="form-control" name="mes">
								      <option value="01">Enero</option>
								      <option value="02">Febrero</option>
								      <option value="03">Marzo</option>
								      <option value="04">Abril</option>
								      <option value="05">Mayo</option>
								      <option value="06">Junio</option>
								      <option value="07">Julio</option>
								      <option value="08">Agosto</option>
								      <option value="09">Septiembre</option>
								      <option value="10">Octubre</option>
								      <option value="11">Noviembre</option>
								      <option value="12">Diciembre</option>
								</select>
				            </div>
				          </div>
					      <div id="row">						    
							    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
					              <label ><span class="fa fa-money"></span> Ingreso Mesual:</label>
					              <input type="text" name="ingresos" class="form-control"  id="mi-importe" placeholder="0">
					            </div>
							    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
					              <label ><span class="fa fa-money"></span> Percepciones:</label>
					              <input type="text" name="percepciones" class="form-control"  id="mi-importe" placeholder="0">
					            </div>	
														    
					      </div>

		
							<div class="row">
							  	<h4><b>&nbsp;&nbsp;&nbsp;¿Es la primera vez que declara para este período?</b></h4>
							  	<div class="col-md-6">
								  	<label ></label>
								  	<input id="valor" type="checkbox" name="valor" checked="checked" />
					            	<label for=valor class=cb-label></label>								
					            </div>	
								<div class="col-md-6">
								  	<center>
								  	<div class="captcha">
								  		<img src="http://www.sunat.gob.pe/cl-ti-itmrconsruc/captcha?accion=image"></img>
								  	</div>
								   	</center>
								</div>
							</div>			
				          <div id="row">				
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-money"></span> Si marco NO, ingrese su compensación:</label>
				              <input type="text" name="compensacion" class="form-control" id="m-t-asociado" placeholder="0">
				            </div>

				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-external-link"></span> Ingresa la imagen:</label>
				              <input type="text" name="codigo" class="form-control"  id="mi-t-fraccionamiento" placeholder="XXXX" >
				            </div>				  
				          </div>
				          <div class="row">
			                    <div class="col-md-11 col-sm-12 col-xs-12 form-group">
			                        <input class='navbar-right btn btn-primary' style="color: #FFF; background-color: #0b5394" size="100" type="submit" value="Generar PDF" />			                     
			                    </div>
			            	</div>
					    </form> 
					  </div>
			        </div>
			      </div>
			      
			    </div>
			</div>
			<!-- Modal Arrendamiento -->
			<div class="modal fade" id="myModal3" role="dialog">
			    <div class="modal-dialog modal-lg">

			      <div class="modal-content">
			        <div class="modal-header" style="background-color:#0b5394">
			          <button type="button" style="color:#FFFFFF" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title" style="color:#FFFFFF" align="center"><strong>Guía Para Arrendamiento</strong></h4>
			        </div>
			        <div class="modal-body">
			          <div>
			          	<form name="formulario" method="post" action="guias/formato.php" target="_blank">
					      <div id="row">
				           <h4><b>Datos Necesarios del Arrendador</b></h4>
				            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-user"></span> N° de RUC:</label>
				              <input type="text" name="ruc" class="form-control" id="mi-ruc" placeholder="XXXXXXXXXXX">
				            </div>

				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-calendar"></span> Periodo:</label>
				              <input type="text" name="anio" class="form-control"  id="mi-periodo" placeholder="2017">
				            </div>

				            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-calendar-o"></span> Mes:</label>
				              <select class="form-control" name="mes">
								      <option value="01">Enero</option>
								      <option value="02">Febrero</option>
								      <option value="03">Marzo</option>
								      <option value="04">Abril</option>
								      <option value="05">Mayo</option>
								      <option value="06">Junio</option>
								      <option value="07">Julio</option>
								      <option value="08">Agosto</option>
								      <option value="09">Septiembre</option>
								      <option value="10">Octubre</option>
								      <option value="11">Noviembre</option>
								      <option value="12">Diciembre</option>
								</select>
				            </div>
				          </div>
					      <div id="row">	
					      		<h4><b>Datos Necesarios del Inquilino</b></h4>					    
							    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
					              <label ><span class="fa fa-list-alt"></span> Código del Documento de Indentidad:</label>
					              <select class="form-control" name="cod">
									      <option value="6">RUC</option>
									      <option value="1">DNI o Libreta Electoral</option>
									      <option value="2">Carné de Fuerzas Policiales</option>
									      <option value="3">Carné de Fuerzas Armadas</option>
									      <option value="4">Carné de Extranjería</option>
									      <option value="7">Pasaporte</option>
									</select>
					            </div>
							    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
					              <label ><span class="fa fa-envelope-square"></span> Número del Documento de Indentidad:</label>
					              <input type="text" name="num" class="form-control"  id="mi-importe" placeholder="XXXXXXXX">
					            </div>	
														    
					      </div>
		
				          <div id="row">		
				          	<h4><b>¿Es ésta una declaración recitificatoria / sustitutoria?</b></h4>
				          	<b> &nbsp;&nbsp;&nbsp;Si marco SI, llene el N° de orden e importe.</b><br>		
				            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              <label ></label>
								<input id="declaracion" type="checkbox" name="declaracion" />
					            <label for=declaracion class=cb-label></label>
					           	<hr style="visibility: hidden;">

				            </div>

				            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-external-link"></span> Número de orden u Operación:</label>
				              <input type="text" name="codigo" class="form-control"  id="mi-t-fraccionamiento" placeholder="0" ><br>
				            </div>

				            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
				              <label ><span class="fa fa-money"></span> Importe a Pagar:</label>
				              <input type="text" name="codigo" class="form-control"  id="mi-t-fraccionamiento" placeholder="0" ><br>
				            </div>				  
				          </div>
				        
				          <div id="row">
				          	<h4><b>Monto del Alquiler</b></h4>				         	
				            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
				              <label ></label>
								<label ><span class="fa fa-money"></span> Importe:</label>
				             	<input type="text" name="codigo" class="form-control"  id="mi-t-fraccionamiento" placeholder="0" >
				            </div>
				          	
				          </div>
				          <div class="row">
			                    <div class="col-md-11 col-sm-12 col-xs-12 form-group">
			                        <input class='navbar-right btn btn-primary' style="color: #FFF; background-color: #0b5394" size="100" type="submit" value="Generar PDF" />			                     
			                    </div>
			            	</div>
					    </form> 
					  </div>
			        </div>
			      </div>
			      
			    </div>
			</div>
		</div>
		<div class="col-md-12">
		  <h2>Conversor</h2>
		  <iframe id="tmccc" src="http://themoneyconverter.com/ES/CurrencyConverter.aspx?tab=0&amp;from=PEN&amp;to=USD&amp;bg=ffffff" style="width:350px; height:400px; border: none;" scrolling="no" marginwidth="0" marginheight="0"></iframe>
	      </div>
	    </div>					
	  </div>
	</div>
     
      

      <div class="col-md-12 sec5">
        <ul class="nav navbar-nav">
	  <li ><a href="index.html">Inicio</a></li>
	  <li><a href="#">Nosotros</a></li>
	  <li><a href="#">Publicaciones</a></li>
	  <li><a href="#">Noticias</a></li>
	  <li><a href="#">Contacto</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
	  	<div class="col-sm-3 col-md-12">
	  		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
			<a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	        <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	        <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	        <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>    	  
    	</div>
		</ul>
		
      </div>
      <div class="col-md-6">
      <?php
      	echo "<p>Visitante: $contador </p>";
      	?>
      </div>
      
    </div>
    
  </body>
</html>


<?php
}else{
$mensaje="Hola Te has suscrito a el buencontribuyente.com";
$destino= $_POST['email'];
$remitente = "multiviralbeta@gmail.com";
$asunto = "Asunto: Subscripcion";
mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
<?php
   echo "<script>";
   echo "alert('Mensaje enviado con exito');";
   echo "window.location = 'index.php';";
   echo "</script>";  
   }
?>

