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

//Reumuneraciones
//obligatoorias
$mensual = $_POST['mensual'];

//opcionales
$horas_extras = $_POST['horas_extras'];
$boni_nocturna = $_POST['boni_nocturna'];
$otras_remuneraciones = $_POST['otras_remuneraciones'];
$gratificaciones = $_POST['gratificaciones'];
$reintegros = $_POST['reintegros'];
$vacaciones = $_POST['vacaciones'];

//descuentos
$essalud=0.09;
//ONP
//AFP
//OPCIONALES
$inasistencia = $_POST['inasistencia'];
//TOTAAAl
$totalr=$mensual+$horas_extras+$boni_nocturna+$otras_remuneraciones+$gratificaciones+$reintegros+$vacaciones;
if($estado=='casado'){
  $totalr=$totalr+85;

}

$onp=0.13*$totalr;
$essalud=$essalud*$totalr;
$spp1 = $_POST['spp1']*$totalr/100;
$spp2 = $_POST['spp2']*$totalr/100;
$spp3 = $_POST['spp3']*$totalr/100;

$totald=0.0;
if($pension=='AFP'){
  $totald=$spp1+$spp2+$spp3;
}
else{
  $totald=$onp;
}
$totald=$totald+$inasistencia;

$neto=$totalr-$totald;
//echo $total;
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

  include 'NumeroALetras.php';
  $letras = NumeroALetras::convertir(intval($neto));


  function strstr_after($haystack, $needle, $case_insensitive = false) {
    $strpos = ($case_insensitive) ? 'stripos' : 'strpos';
    $pos = $strpos($haystack, $needle);
    if (is_int($pos)) {
        return substr($haystack, $pos + strlen($needle));
    }
    // Most likely false or null
    return $pos;
}
  
  $centimos=strstr_after($neto, '.');
  //echo $centimos;


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
      <div id="capa6">
       <table>
        <tr>
          <td><?php echo $mensual; 
              if(is_float(!$mensual)) echo ".00";
          ?></td>
        </tr>
        <tr>
          <td><?php if($estado=='casado'){
                    echo 85,'.00';
            } ?></td>
        </tr>
        <tr>
          <td><?php 
              if($horas_extras){
                echo $horas_extras;
              }
           ?></td>
        </tr>
        <tr>
          <td>
            <?php 
              if($boni_nocturna)
                echo $boni_nocturna;
             ?>
          </td>
        </tr>
        <tr>
          <td>
          <?php 
              if($otras_remuneraciones)
                echo $otras_remuneraciones;
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($gratificaciones)
                echo $gratificaciones;
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($reintegros)
                echo $reintegros;
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($vacaciones)
                echo $vacaciones;
             ?>
          </td>
        </tr>
        <tr>
          <td></td>
        </tr> 
        <tr>
          <td></td>
        </tr>    
        <tr>
          <td><?php echo $totalr; ?></td>
        </tr>    
       </table>      
       </div>
<div id="capa7">
       <table>
        <tr>
          <td></td>
          <td><?php echo $essalud; ?></td>
        </tr>
        <tr>
          <td><?php
            if($pension=='ONP'){
              echo $onp;
            }
          ?></td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo $spp1;
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo $spp2;
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo $spp1;
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($inasistencia){
              echo $inasistencia;
            }
            ?>

          </td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $totald; ?></td>
          <td><?php echo $essalud; ?></td>
        </tr>
       </table>      
       </div>
      <div id="total">
        <p><?php echo 'S/.',$neto; ?></p>
      </div>
      <div id="letras" >
        <p> <?php echo 'SON ',$letras,' CON ',$centimos,'/100 NUEVOS SOLES'; ?></p>
      </div>  
      <div id="fecha" >
        <p> <?php echo 'Arequipa, ',getdate()[mday],' de Marzo del 2017'; ?></p>
      </div>
      <div id="reu" >
        <p> <strong>REMUNERACIONES FEBRERO 2017</strong></p>
      </div>


       <div id="copia">
       <div id="capa3">
        <div id="logo">
          <img src=<?php echo 'uploads/logo.'.$imageFileType ?>  alt="">
        </div>
        <div id="capa1">
          <h2 style=""> <?php echo $nombre_empresa; ?></h2>
          <h6 style="letter-spacing: -1px;">RUC <?php echo $ruc ?></h6>
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
        <div id="capa6">
       <table>
        <tr>
          <td><?php echo $mensual; 
              if(is_float(!$mensual)) echo ".00";
          ?></td>
        </tr>
        <tr>
          <td><?php if($estado=='casado'){
                    echo 85,'.00';
            } ?></td>
        </tr>
        <tr>
          <td><?php 
              if($horas_extras){
                echo $horas_extras;
              }
           ?></td>
        </tr>
        <tr>
          <td>
            <?php 
              if($boni_nocturna)
                echo $boni_nocturna;
             ?>
          </td>
        </tr>
        <tr>
          <td>
          <?php 
              if($otras_remuneraciones)
                echo $otras_remuneraciones;
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($gratificaciones)
                echo $gratificaciones;
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($reintegros)
                echo $reintegros;
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($vacaciones)
                echo $vacaciones;
             ?>
          </td>
        </tr>
        <tr>
          <td></td>
        </tr> 
        <tr>
          <td></td>
        </tr>    
        <tr>
          <td><?php echo $totalr; ?></td>
        </tr>    
       </table>      
       </div>
<div id="capa7">
       <table>
        <tr>
          <td></td>
          <td><?php echo $essalud; ?></td>
        </tr>
        <tr>
          <td><?php
            if($pension=='ONP'){
              echo $onp;
            }
          ?></td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo $spp1;
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo $spp2;
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo $spp1;
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($inasistencia){
              echo $inasistencia;
            }
            ?>

          </td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><?php echo $totald; ?></td>
          <td><?php echo $essalud; ?></td>
        </tr>
       </table>      
       </div>
      <div id="total">
        <p><?php echo 'S/.',$neto; ?></p>
      </div>
      <div id="letras" style="width: 300px;" >
        <p> <?php echo 'SON ',$letras,' CON ',$centimos,'/100 NUEVOS SOLES'; ?></p>
      </div>  
      <div id="fecha" style="width: 300px;">
        <p> <?php echo 'Arequipa, ',getdate()[mday],' de Marzo del 2017'; ?></p>
      </div>
      <div id="reu" >
        <p> <strong>REMUNERACIONES FEBRERO 2017</strong></p>
      </div>

      </div>

       <div id="capa2">
    		 <img src="uploads/boleta_final.png" alt=""> 
       </div>
        <div id="capa5"><p>Modelo de boleta generado por <a href="http://elbuencontribuyente.com">http://elbuencontribuyente.com</a> para fines académicos.</p></div>
  </body>
</html>

