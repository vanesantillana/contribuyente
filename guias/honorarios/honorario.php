<?php 
$nombre1= $_POST['nombre1'];
$ruc1 = $_POST['ruc1'];
$telefono1 = $_POST['telefono1'];
$direccion1 = $_POST['direccion1'];


$nombre2 = $_POST['nombre2'];
$identificado = $_POST['identificado'];
$ruc2 = $_POST['ruc2'];
$direccion2 = $_POST['direccion2'];

$suma=$_POST['suma'];
$concepto=$_POST['concepto'];
$observacion=$_POST['observacion'];
$inciso=$_POST['inciso'];
$fecha=$_POST['fecha'];
$total=$_POST['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recibo por Honorarios electronico</title>
	<style>
		body {
	      position: relative;
	      width: 21cm;  
	      height: 29.7cm; 
	      margin: 0 auto; 
	      color: #001028;
	      background: #FFFFFF;
	      
	    }
		.principal{
			position: absolute;
			top: 20px;
		}

		.principal p{
			text-transform: uppercase;
			
		}
		.principal strong{
			text-transform: capitalize;
			
		}

       .ruc-head{
       	position: absolute;
       	 text-transform: uppercase;
       	border-style: solid;
       	text-align: center;
       	top: 15px;
       	width: 320px;
       	height: 150px;
       	left: 450px;
       }	
       .total{
       	position: absolute;
       	top: 450px;
       	left: 350px;
       }
	</style>
</head>

<body>
	<div class="principal">
		<h2><?php echo $nombre1; ?></h2>
		<p> <?php echo $direccion1; ?></p>
		<p>telefono <?php echo $telefono1; ?></p>
		<br>
		<br>
		
		<p><strong>Recibi de: </strong> <?php echo $nombre2; ?></p>
		<p><strong>Identificado con </strong> <?php echo $identificado;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Número </strong><?php echo $ruc2;?> </p>
		<p><strong>Domiciliado en:</strong> <?php echo $direccion2; ?></p>
		<p><strong>La suma de </strong> <?php echo $suma; ?></p>
		<p><strong>Por concepto de </strong> <?php echo $concepto; ?></p>
		<p><strong>Observación:</strong> <?php echo $observacion; ?></p>
		<p><strong>Inciso:</strong> <?php echo $inciso; ?></p>
		<p><strong>Fecha de emisión </strong> <?php echo $fecha; ?></p>

	</div>
	<div class="ruc-head">
		<h3>R.U.C. <?php echo $ruc1; ?> </h3>
		<h3>recibo por honorarios electronico</h3>
		<h3>Nro: E001 - 1</h3>
	</div>
	<div class="total">
		<p><strong>Total por honorarios:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $total; ?></p>
		<p><strong>Retencion (8 %) IR </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0.00)</p>
		<p><strong>Total Neto Recibido </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $total; ?> SOLES</p>
		
	</div>
</body>
</html>