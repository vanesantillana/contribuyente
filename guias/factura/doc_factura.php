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
    <link rel="stylesheet" href="factura.css">
    <script>
    window.print();
  </script>
  </head>
  <body>
      <div id="capa3">
	<div id="logo">
	  <img src=<?php echo 'uploads/logo.'.$imageFileType ?>  alt="">
	</div>

	<div id="capa1" style="">
	  <h1 style="text-shadow: 0.12em 0.1em 0.1em  gray; text-transform: uppercase;"> <?php echo $nombre_empresa; ?></h1>
	  
	  <p style="line-height:10px; font-size: 14px; font-weight: bold; line-height: 12px"><?php echo $rubro; ?></p>
	  
	  <h4 style="line-height: 12px; font-size:15px;font-weight: normal;border:1px; border-top-style: solid;border-bottom-style: solid; height: 20px; padding-top: 12px; margin-top: -5px;"><?php echo $nombre_titular; ?>  </h4>
	  <p style="font-weight: normal; margin-top: -10px; font-size: 13px; line-height: 12px;"><?php echo $direccion ?> </p>
	</div>

	<div id="capa4">
	  <h2 style="letter-spacing: -1px;">R.U.C. <?php echo $ruc ?></h2>
	  <h2 style="letter-spacing: 10px;">FACTURA</h2>
	  <h3 style='letter-spacing: 0.1em;font-size: 23px;font-family: "Courier New", Courier, monospace;'>001 -       N°000001</h3>
	  <br>
	</div>
      </div>
      <div id="capa2">
		<img src="uploads/factura12.jpg" alt=""> 
    </div>
  </body>
</html>
