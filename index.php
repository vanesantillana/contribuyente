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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>El buen contribuyente</title>
    <script type="text/javascript">
    	$(window).on('load',function(){
        	$('#myModal0').modal('show');
    });
	</script>
  </head>
  <body>
  	<div class="container">
  	  <div class="modal fade" id="myModal0" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h3 class="modal-title" style="color:#0b5394"><strong>Suscribete a El Buen Contribuyente</strong></h3>
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
	<ul class="nav navbar-nav">
	  <li class="active"><a href="#">Inicio</a></li>
	  <li><a href="#">Nosotros</a></li>
	  <li><a href="#">Publicaciones</a></li>
	  <li><a href="#">Noticias</a></li>
	  <li><a href="#">Contacto</a></li>
	</ul>

	<ul class="nav navbar-right">
	  	<div class="col-sm-3 col-md-12">
	    	<button type="button" style="background-color:#0b5394" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal0">Suscribete</button>
    	</div>
	</ul>

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
			  
    </form> 


		</div>
		<div class="col-md-12">
		  <h2>Indicadores</h2>
		  <!-- DolarWeb IndMin Start -->
		  <div id="IndicadoresMin"><h2><a href="http://dolar.wilkinsonpc.com.co/">Dolar Hoy Peru</a></h2></div><script type="text/javascript" src="http://dolar.wilkinsonpc.com.co/widgets/gratis/indicadores-economicos-min.js?ancho=170&alto=85&fondo=transparent&fsize=10&ffamily=sans-serif&fcolor=000000"></script><!-- DolarWeb IndMin End -->
		</div>
		<div class="col-md-12">
			<h2>Formatos</h2>		
		    <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">Guía Pago Fácil Nuevo Régimen Único Simplificado</button>
			  <!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">

			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title" style="color:#0b5394"><strong>Guía Pago Fácil Nuevo Régimen Único Simplificado</strong></h4>
			        </div>
			        <div class="modal-body">
			          <div class="row">
			          	<form name="formulario" method="post" action="formulario1/form_nash.php" target="_blank">
					      <div class="col-md-6">
							    <div class="form-group row">
							      <label for="inputRuc" class="col-sm-4 col-form-label">RUC:</label>
							      <div class="col-sm-8">
							        <input class="form-control" placeholder="XXXXXXXXXXX" name="ruc" value="">
							      </div>
							    </div>
							    <div class="form-group row">
							      <label for="inputMes" class="col-sm-4 col-form-label">Mes:</label>
							      <div class="col-sm-8">
							        <input class="form-control" placeholder="01" name="mes" value="">
							      </div>
							    </div> 
							    <div class="form-group row">
							      <label for="inputAño" class="col-sm-4 col-form-label">Año:</label>
							      <div class="col-sm-8">
							        <input class="form-control" placeholder="2017" name="anio" value="2017">
							      </div>
							    </div>
							    <div class="form-group row">
							      <label for="inputAño" class="col-sm-4 col-form-label">Bruto Mensual:</label>
							      <div class="col-sm-8">
							        <input class="form-control" placeholder="100.00" name="ingresos" value="">
							      </div>
							    </div>
							    <div class="form-group row">
							      <label for="exampleSelect1" class="col-sm-4 col-form-label">Categoría:</label>
							      <div class="col-sm-8">
							        <select class="form-control" name="categoria">
								      <option value="1">1</option>
								      <option value="2">2</option>
								      <option value="3">3</option>
								      <option value="4">4</option>
								      <option value="5">5</option>
								    </select>
							      </div>
							    </div> 
							    <div class="form-group row">
							      <label for="inputAño" class="col-sm-4 col-form-label">Percepciones:</label>
							      <div class="col-sm-8">
							        <input class="form-control" placeholder="0.00" name="percepciones" value="">
							      </div>
							    </div>  
							    <div class="form-group row">
							      <label for="inputAño" class="col-sm-4 col-form-label">Importe:</label>
							      <div class="col-sm-8">
							        <input class="form-control" placeholder="20.00" name="pagar" value="">
							      </div>
							    </div> 
						    
					      </div>
					      <div class="col-md-6">
					      	<p>¿Es la primera vez que declara para este período?</p>
					      	<div class="form-group row">
					      		<center>
						      	<input type="radio" name="valor" checked> SI
  								<input type="radio" name="valor" > NO 
  								</center>
							</div>
							<p>De haber marcado NO, deberá proporcionar la información de la Compensación de las Percepciones de IGV y/o de los pagos efectuados en la declaración original que se está rectificando.</p>
							<div class="form-group row">
							    <label for="inputAño" class="col-sm-5 col-form-label">Compensación:</label>
							    <div class="col-sm-7">
							        <input class="form-control" name="compensacion" value="0.00" placeholder="0.00">
							    </div>
							</div> 
					      	
					      </div>
						    <div class="modal-footer">
								<input style="color: #FFF; background-color: #0b5394" type="submit"/>
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

