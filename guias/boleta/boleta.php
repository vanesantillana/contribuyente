<?php 
  // ini_set('display_errors', 1);
   //error_reporting(E_ALL);



$nombre_empresa = $_POST['nombre_empresa'];
$ruc = $_POST['ruc'];
$direccion = $_POST['direccion'];
$fecha_e=$_POST['fecha_e'];
$ciudad=$_POST['ciudad'];

$periodo=$_POST['anio'];
$mesd=$_POST['mes'];

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
$nombre_afp=$_POST['nombre_afp'];
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
  

  function agrega($valor){
    $v=strstr_after($valor, '.');
    if($v=='')
      return $valor.'.00';
    return $valor;
  }

  $centimos=strstr_after($neto, '.');
  if($centimos=='')
    $centimos='00';

  //echo $centimos;
  $año=strstr($fecha_e,'-',true);
  $fecha_e=strstr_after($fecha_e,'-');
  $mes=strstr($fecha_e,'-',true);
  $dia=strstr_after($fecha_e,'-');
  //echo $dia;
  $meses=['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Boleta de Pagos</title>
    <!--<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    	-->
    <link rel="stylesheet" href="boleta.css">
    <script>
      var myFunc = function() {
      window.print();
  }
  window.onload = function() {
    setTimeout(myFunc, 3000);
  }
  </script>
  </head>
  <body>
  <div id="original">
      <div id="capa3">
      	<div id="logo">
      	  <img src=<?php echo 'uploads/logo.'.$imageFileType ?>  alt="">
      	</div>
	      <div id="capa1">
      	  <h2 style=""> <?php echo strtoupper($nombre_empresa); ?></h2>
          <h6 style="">RUC <?php echo $ruc ?></h6>
          <p> <?php echo $direccion ?></p>
      	</div>
      </div>
	    <div id="capa4">
       <table>
         <tr>
              <td style="min-width: 220px;"><strong> Nombre:</strong> &nbsp;&nbsp;<?php  echo $nombre; ?></td>
              <td><strong>Sist. Pension:</strong>&nbsp;&nbsp; <?php 
              echo $pension,' - '; 
              if($pension=='AFP')
                echo $nombre_afp;
              ?></td>
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
          <td><?php echo agrega($mensual); 
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
                echo agrega($horas_extras);
              }
           ?></td>
        </tr>
        <tr>
          <td>
            <?php 
              if($boni_nocturna)
                echo agrega($boni_nocturna);
             ?>
          </td>
        </tr>
        <tr>
          <td>
          <?php 
              if($otras_remuneraciones)
                echo agrega($otras_remuneraciones);
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($gratificaciones)
                echo agrega($gratificaciones);
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($reintegros)
                echo agrega($reintegros);
             ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php 
              if($vacaciones)
                echo agrega($vacaciones);
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
          <td><?php echo agrega($totalr); ?></td>
        </tr>    
       </table>      
       </div>
<div id="capa7">
       <table>
        <tr>
          <td></td>
          <td><?php echo agrega($essalud); ?></td>
        </tr>
        <tr>
          <td><?php
            if($pension=='ONP'){
              echo agrega($onp);
            }
          ?></td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo agrega($spp1);
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo agrega($spp2);
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($pension=='AFP'){
              echo agrega($spp1);
            }
            ?>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <?php
            if($inasistencia){
              echo agrega($inasistencia);
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
          <td><?php echo agrega($totald); ?></td>
          <td><?php echo agrega($essalud); ?></td>
        </tr>
       </table>      
       </div>
      <div id="total">
        <p><?php echo 'S/.',agrega($neto); ?></p>
      </div>
      <div id="letras" >
        <p> <?php echo 'SON ',$letras,' CON ',$centimos,'/100 NUEVOS SOLES'; ?></p>
      </div>  
      <div id="fecha" >
        <p> <?php echo $ciudad,', ',$dia,' de ',$meses[(int)$mes],' del ',$año; ?></p>
      </div>
      <div id="reu" >
        <p> <strong>REMUNERACIONES  <?php echo strtoupper($mesd),' ',$periodo;?></strong></p>
      </div>

</div>
       <div id="copia" >

      </div>

       <div id="capa2">
    		 <img src="uploads/boleta_final.png" alt=""> 
       </div>
        <div id="capa5"><p>Modelo de boleta generado por <a href="http://elbuencontribuyente.com">http://elbuencontribuyente.com</a> para fines académicos.</p></div>
  
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
    $( "#original" ).clone().appendTo( "#copia" );
  </script>

  </body>
</html>

