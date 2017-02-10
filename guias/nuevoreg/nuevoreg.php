<input type='button' onclick='window.print();' value='Imprimir' align="left" /></form> 
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

  
  $infloat = (float) $ingresos;
  if ($infloat <= 5000.0) {
    $categoria = '1';
    $total = '20.0';
  } else {
    $categoria = '2';
    $total = '50.0';
  }

  if ($check == TRUE ){
    $checksi = 'X';
  }
  else{
    $checkno = 'X';
  }
  if ($ruc == '')
  {
    $ruc = '&nbsp;';
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
     top: 251px;
     left:523px;
     width:300px;
     height:12px;
    }
    #capa1{ position:absolute;
     z-index:1;
     top:181px;
     left:210px;
     width:300px;
     height:12px;
    }
    #capa2{
     position:absolute;
     z-index:0;
    }
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
    hr{
      visibility: hidden;
    }
  </style>
</head>
<body>
  <div id="capa2"> <img src="nuevoreg.png" /> </div>
  <div id="capa1">
  ';
  $html .= $ruc;
  $html .=' 
    <hr style="margin-bottom: 8px;">
  ';
  $html .= $mes;
  $html .=' 
  &nbsp;&nbsp;
  ';
  $html .= $anio;
  $html .=' 
    <hr style="margin-bottom:-1px;">
  S/';
  $html .= $ingresos;
  $html .=' 
    <hr style="margin-bottom: 7px;">
  S/';
  $html .= $compras;
  $html .=' 
   <br>
    <hr style="margin-bottom: 1px;">
  ';
  $html .= $categoria;
  $html .=' 
  <br>
    <hr style="margin-bottom:-1px;">
    S/
  ';
  $html .= $percepciones;
  $html .=' 
    <hr style="margin-bottom: 7px;">
    S/
  ';
  $html .= $total;
  $html .=' 
  <br>
  </div>
  <div id="capa3">
  ';
  $html .= $checksi;
  $html .=' 
    &nbsp;&nbsp;&nbsp;&nbsp;
  ';
  $html .= $checkno;
  $html .=' 
    <hr style="margin-bottom: 53px;">
    &nbsp;&nbsp;&nbsp;S/
  ';
  $html .= $compensacion;
  $html .=' 
  <br>    
  </div>
 
</body>
</html>
';

  echo $html;
?>