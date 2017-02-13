<?php 
  $ruc = $_POST['ruc'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  $cod = $_POST['cod'];
  $num = $_POST['num'];
  $check = $_POST['check'];
  $operacion = $_POST['operacion'];
  $monto = $_POST['monto'];

  $soles ='S/.  ';
  $codigo=$_POST['codigo']; 
  $url= "http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$ruc&codigo=$codigo&tipdoc=1?";

  if ($check == TRUE ){
    $checksi = 'X';
    $checkno = '&nbsp;';
    $monto1 .= $monto*5/100;
  }
  else{
    $checkno = 'X';
    $checksi = '&nbsp;';
    $soles = '';
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
  <title>Guía para Arrendamiento</title>
  <style>
    #capa3{ position:absolute;
     z-index:1;
     top: 356px;
     left: 595px;
     width:300px;
     height:12px;
    }
    #capa4{ position:absolute;
     z-index:1;
     top:299px;
     left: 320px;
     width:300px;
     height:12px;
    }
    #capa5{ position:absolute;
     z-index:1;
     top: 262px;
     left:634px;
     width:300px;
     height:12px;
    }
    #capa1{ position:absolute;
     z-index:1;
     top:193px;
     left:212px;
     width:300px;
     height:12px;
    }
    #capa2{
     position:absolute;
     z-index:0;
     top: 21px;
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
            frameborder="0" height="180" width="100%" style=" z-index: 1;position:absolute; clip: rect(10px,470px,30px,222px);
top: 183px;
left: 120px;"></iframe>
    </div>
</div>';

$html.='  <div id="capa2"> <img src="arrenda.jpg" /> </div>
  <div id="capa1">
    ';
  $html .= $ruc;
  $html .=' 
    <hr style="margin-bottom: 35px;">
  ';
  $html .= $mes;
  $html .=' 
  &nbsp;&nbsp;
  ';
  $html .= $anio;
  $html .=' 
  </div>
  <div id="capa4">
    <hr style="margin-bottom:-1px;">
  ';
  $html .= $cod;
  $html .=' 
    <hr style="margin-bottom: 16px;">
  &nbsp;';
  $html .= $num;
  $html .=' 
  <br><br>
    <hr style="margin-bottom:5px;">
    S/.
  ';
  $html .= $monto;
  $html .=' 
  </div>
  <div id="capa5">
  ';
  $html .= $checkno;
  $html .=' 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  ';
  $html .= $checksi;
  $html .=' 
  </div>
  <div id="capa3">
  ';
  $html .= $operacion;
  $html .=' 
  <br><br>
    <hr style="margin-bottom: 12px;">
  ';
  $html .= $soles;
  $html .= $monto1;
  $html .='   
  </div>
  <div id="capa6"><p>Modelo de factura generado por <a href="http://elbuencontribuyente.com">http://elbuencontribuyente.com</a> para fines académicos</p></div>
</body>
</html>
';
echo $html;

?>