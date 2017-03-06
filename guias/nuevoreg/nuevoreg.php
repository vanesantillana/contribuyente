<?php 
  $ruc = $_POST['ruc'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  $ingresos = $_POST['ingresos'];
  $compras = $_POST['compras'];
  $percepciones = $_POST['percepciones'];
  $codigo = $_POST['codigo'];
  $check = $_POST['check'];
  $compensacion = $_POST['compensacion'];
  
  $url= "http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$ruc&codigo=$codigo&tipdoc=1?";

  $soles ='S/.  ';  
  if ((float)$compras > (float)$ingresos){
    $ingreso = $compras;
  }

  $infloat = (float) $ingreso;
  if ($infloat <= 5000.0) {
    $categoria = '1';
    $total = '20.0';
  } else {
    $categoria = '2';
    $total = '50.0';
  }

  if ($check == TRUE ){
    $checksi = 'X';
    $soles = '';
  }
  else{
    $checkno = 'X';
  }
  if ($ruc == '')
  {
    $ruc = '&nbsp;';
  }
  
  if ($percepciones != '')
  {
    $total = (string)((float)$total - (float)$percepciones);
    if ((float)$total < 0)
      $total = '0.0'; 
  }

$html='
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Guía Pago Fácil Nuevo Régimen Único Simplificado</title>
  <style>
    #capa3{ position:absolute;
     z-index:1;
     top: 270px;
     left:565px;
     width:300px;
     height:12px;
    }
    #capa5{ position:absolute;
     z-index:1;
     top: 365px;
     left: 630px;
     width:300px;
     height:12px;
    }
    #capa1{ position:absolute;
     z-index:1;
     top:197px;
     left:225px;
     width:300px;
     height:12px;
    }
    #capa4{ position:absolute;
     z-index:1;
     top:280px;
     left:249px;
     width:300px;
     height:12px;
    }
    #capa2{
     position:absolute;
     z-index:0;
     top: 22px;
    }
    #capa6{
      position: absolute;
      top: 1300px;
      font-weight: normal;
      font-size: 14px;
      letter-spacing: 2px
    }
    body {
      position: relative;
      width: 21cm;  
      height: 26cm;  
      margin: 0 auto; 
      color: #001028;
      background: #FFFFFF;
      font: bold 90% monospace;
      font-size: 1.3em;
    }
    hr{
      visibility: hidden;
    }
  </style>
  <script>
      var myFunc = function() {
      window.print();
}
window.onload = function() {
  setTimeout(myFunc, 3000);
}
  </script>
</head>
<body>';

   $html .=' <div id="content">
    <div>
        <iframe id="optomaFeed" src=';
     $html .= $url;  
    $html .='  scrolling="no"
            frameborder="0" height="180" width="100%" style=" z-index: 1;position:absolute; clip: rect(10px,600px,30px,222px);
            top: 190px;
left: 143px;"></iframe>
    </div>
</div>';


$html.='
  <div id="capa2"> <img src="nuevoreg.png" /> </div>
  <div id="capa1">
  &nbsp;';
  $html .= $ruc;
  $html .=' 
    <hr style="margin-bottom: 15px;">
  &nbsp;';
  $html .= $mes;
  $html .=' 
  &nbsp;&nbsp;&nbsp;&nbsp;
  ';
  $html .= $anio;
  $html .=' 
  </div>

  <div id="capa4">
  &nbsp;S/.';
  $html .= $ingresos;
  $html .=' 
    <hr style="margin-bottom: 13px;">
  &nbsp;S/.';
  $html .= $compras;
  $html .=' 
   <br>
    <hr style="margin-bottom: 7px;">
  ';
  $html .= $categoria;
  $html .=' 
  <br>
    <hr style="margin-bottom: 12px;">
  &nbsp;S/.
  ';
  $html .= $percepciones;
  $html .=' 
    <hr style="margin-bottom: 7px;">
  &nbsp;S/.
  ';
  $html .= $total;
  $html .=' 
  <br>
  </div>
  <div id="capa3">
  ';
  $html .= $checksi;
  $html .=' 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  ';
  $html .= $checkno;
  $html .=' 
  </div>

  <div id="capa5">
  ';
  $html .= $soles;
  $html .= $compensacion;
  $html .=' 
  <br>    
  </div>
  <div id="capa6"><p>Modelo de factura generado por <a href="http://elbuencontribuyente.com">http://elbuencontribuyente.com</a> para fines académicos</p></div>
 
</body>
</html>
';

  echo $html;
?>