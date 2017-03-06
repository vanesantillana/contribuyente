<?php 
$nombre_empresa = $_POST['nombre_empresa'];
$ruc = $_POST['ruc'];
$direccion = $_POST['direccion'];


$nombre = $_POST['nombre'];
$pension = $_POST['pension'];
$nacionalidad = $_POST['nacionalidad'];
$cargo = $_POST['cargo'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$dni = $_POST['dni'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    //echo "Solo JPG, JPEG, PNG & GIF son los permitidos.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "La imagen no sera cargada.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], "uploads/logo.".$imageFileType)) {
	//if (move_uploaded_file($_FILES["logo"]["tmp_name"], "uploads/logo.png")) {
        //echo "La imagen ". basename( $_FILES["logo"]["name"]). " cargo.";
    } else {
        //echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Factura</title>
    <!--<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    	-->
    <link rel="stylesheet" href="boleta.css">
    <script>
    
  </script>
  </head>
  <body>
      <div id="capa3">
      	<div id="logo">
      	  <img src=<?php echo 'uploads/logo.'.$imageFileType ?>  alt="">
      	</div>
	      <div id="capa1">
      	  <h2 style=""> <?php echo $nombre_empresa; ?></h2>
          <h6 style="">RUC <?php echo $ruc ?></h6>
          <p> <?php echo $direccion ?></p>
      	</div>
      </div>
	    <div id="capa4">
       <table>
         <tr>
              <td style="min-width: 220px;"><strong> Nombre:</strong> &nbsp;&nbsp;<?php  echo $nombre; ?></td>
              <td><strong>Sist. Pension:</strong>&nbsp;&nbsp; <?php echo $pension; ?></td>
            </tr>
            <tr>
              <td><strong>Cargo u ocupacion:</strong> &nbsp;&nbsp;<?php echo $cargo; ?></td>
              <td><strong>Nacionalidad:</strong> &nbsp;&nbsp;<?php echo $nacionalidad; ?></td>
            </tr>
            <tr>
              <td><strong>Fecha de ingreso:</strong> &nbsp;&nbsp;<?php echo $fecha; ?></td>
              <td></td>
            </tr>
            <tr>
              <td><strong>Documento/Identidad:</strong> &nbsp;&nbsp;<?php echo $dni; ?></td>
              <td></td>
            </tr>      
       </table>   	 
       </div>
       <div id="copia">
       <div id="capa3">
        <div id="logo">
          <img src=<?php echo 'uploads/logo.'.$imageFileType ?>  alt="">
        </div>
        <div id="capa1">
          <h2 style=""> <?php echo $nombre_empresa; ?></h2>
          <h6 style="letter-spacing: -1px;">RUC <?php echo $ruc ?></h6>
        </div>
      </div>
      <div id="capa4">
       <table>
         <tr>
              <td style="min-width: 220px;"><strong> Nombre:</strong> &nbsp;&nbsp;<?php  echo $nombre; ?></td>
              <td><strong>Sist. Pension:</strong>&nbsp;&nbsp; <?php echo $pension; ?></td>
            </tr>
            <tr>
              <td><strong>Cargo u ocupacion:</strong> &nbsp;&nbsp;<?php echo $cargo; ?></td>
              <td><strong>Nacionalidad:</strong> &nbsp;&nbsp;<?php echo $nacionalidad; ?></td>
            </tr>
            <tr>
              <td><strong>Fecha de ingreso:</strong> &nbsp;&nbsp;<?php echo $fecha; ?></td>
              <td></td>
            </tr>
            <tr>
              <td><strong>Documento/Identidad:</strong> &nbsp;&nbsp;<?php echo $dni; ?></td>
              <td></td>
            </tr>      
       </table>      
       </div>
      </div>

       <div id="capa2">
    		 <img src="uploads/boleta_final.png" alt=""> 
       </div>
        <div id="capa5"><p>Modelo de boleta generado por <a href="http://elbuencontribuyente.com">http://elbuencontribuyente.com</a> para fines académicos.</p></div>
  </body>
</html>
