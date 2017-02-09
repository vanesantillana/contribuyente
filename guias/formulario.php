<?php  

include("../lib/mpdf.php");
   $mpdf = new mPDF();
   $ruc = $_POST['ruc'];
   $mes = $_POST['mes'];
   $valor = $_POST['valor'];
   $anio = $_POST['anio'];
   $ingresos = $_POST['ingresos'];
   $categoria = $_POST['categoria'];
   $percepciones = $_POST['percepciones'];
   $pagar = $_POST['pagar'];
   $compensacion = $_POST['compensacion'];
    $codigo=$_POST['codigo'];
    //$url_final= "http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$ruc&codigo=$codigo&tipdoc=1";
   if ($valor == TRUE ){
      $valor = 'SI';
      $compensacion = '0.00';
   }
   else{
      $valor = 'NO';
   }
   $html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Guia para pagos varios</title>
  <style>
    body {
      position: relative;
      width: 21cm;  
      height: 29.7cm; 
      margin: 0 auto; 
      color: #001028;
      background: #FFFFFF;
      font: bold 90% monospace;
      font-size: 1.5em;
    }
    .imagen{
      position: absolute;
    }
    .cuerpo{
      float: left;
      position: relative;
    }
    hr{
      visibility: hidden;
    }
    .c1{
      margin-left: 88.3px;
    }
    .c2{
      margin-left: 273px;
      position: relative;
    }
    .c3{
      margin-left: 50px;
      margin-top: 30px;
      width: 500px;
    }
    .p2{

      float: left;
      margin-left: 200px;
    }
    .p3{
      float: right;
    }

  </style>
</head>
<body>
  <div class="imagen">
    <img src="pagosvarios/guiapv.jpg" alt="">
  </div>
  <div class="cuerpo">
    <div class="c1">
      <br><br><br>
      <hr><hr><hr><hr style="margin-bottom: 10.5px;">
      x<br>
      x<br>
      x<br>
      x<br>
    </div>
    <div class="c2">
      <hr style="height: 15.5px;">
      12345678910<br>
      <hr style="height: 11px;">
      2017&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01
      <hr style="margin-bottom:-1.5px;">
      123
      <hr style="margin-bottom: 2.5px;">
      S/560.00<br>
    </div>
    <div class="c3">
      <hr style="height: 5px;">
      <p class="p2">0023</p>
      <hr style="margin-bottom:-1.5px;">
      <pre>                      72547290</pre>
    </div>
  </div>
</body>
</html>
';
 // echo $html;
  $mpdf->writeHTML($html);
  $mpdf->Output();
?>
