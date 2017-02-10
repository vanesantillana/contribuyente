<?php 
$nombre_empresa = $_POST['nombre_empresa'];
$ruc = $_POST['ruc'];
$nombre_titular = $_POST['nombre_titular'];
$direccion = $_POST['direccion'];
$rubro = $_POST['rubro'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Solo JPG, JPEG, PNG & GIF son los permitidos.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "La imagen no sera cargada.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], "uploads/logo.".$imageFileType)) {
	//if (move_uploaded_file($_FILES["logo"]["tmp_name"], "uploads/logo.png")) {
        echo "La imagen ". basename( $_FILES["logo"]["name"]). " cargo.";
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="factura.css">
  </head>
  <body>
    <div class="container">
      <div class="row ">
	<div class="col-md-3">
	  <img src="uploads/logo.jpg" alt="">
	</div>

	<div class="col-md-5 titulo">
	  <h1> <?php echo $nombre_empresa; ?></h1>
	  <p><?php echo $rubro; ?></p>
	  <h4><?php echo $nombre_titular; ?></h4>
	  <h5><?php echo $direccion ?></h5>
	</div>

	<div class="col-md-4 numero panel panel-default ">
	  <h2>R.U.C. <?php echo $ruc ?></h2>
	  <h2>FACTURA</h2>
	  <h3>001 -       N°000001</h3>
	  <br>
	</div>
      </div>
      <div class="row">
	
	<div class="row">
	  <div class="col-xs-12">
	    <table class="table table-bordered">
	    	<tbody>
	      <tr><td>Señor(es):</td></tr>
		<tr><td>Direccion:</td></tr>
		<tr><td>
		<p class="col-md-3">R.U.C.</p><p class="col-md-3">GuiaRem.Remitente N°</p><p class="col-md-3">GuiaRem.Transportista N°</p><p class="col-md-3">Fecha: &nbsp  &nbsp &nbsp &nbsp &nbsp / &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp/ </p></td></tr>
		</tbody>
	    </div>
	  
	<table class="table table-bordered cuerpo">
	  <thead>
	    <tr>
	      <th class="col-md-1">
		<h5>CANT.</h5>
	      </th>
	      <th class="col-md-1">
		<h5>UNID.</h5>
	      </th>
	      <th class="col-md-6">
			<h5>DESCRIPCIÓN</h5>
	      </th>
	      <th class="col-md-1">
		<h5>P. UNITARIO</h5>
	      </th>
	      <th class="col-md-1">
		<h5>IMPORTE</h5>
	      </th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>&nbsp</td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td></td>
	    </tr>
	    <tr>
	    <td>&nbsp</td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <tr>
	    <tr>
	      <td>&nbsp</td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td></td>
	    </tr>
	    <tr>
	      <td>&nbsp</td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td></td>
	    </tr>
	    <tr>
	      <td>&nbsp</td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td></td>
	    </tr>
	    <tr>
	      <td>&nbsp</td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td></td>
	    </tr>
	    <tr>
	      <td>&nbsp</td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td></td>
	    </tr>
	    <tr>
	      <td>&nbsp</td>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td></td>
	    </tr>
	  </tbody>
	</table>
	<div class="row text-right">
	  <div class="col-xs-3 col-xs-offset-7"><strong>
	      Sub Total:
	      Impuestos (IVA 21%):
	      Total:
	  </strong></div>
	  <div class="col-xs-2"><strong>
	      1,200.00 €
	      252.00 €
	      1,452.00 €
	  </strong></div>
	</div>

      </div>
      <div class="row">
	
      </div>
    </div>
    
  </body>
</html>
