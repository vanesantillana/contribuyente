<?php 
  $ruc = $_POST['ruc'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  $cod = $_POST['cod'];
  $num = $_POST['num'];
  $check = $_POST['check'];
  $operacion = $_POST['operacion'];
  $importe = $_POST['importe'];
  $monto = $_POST['monto'];


  $codigo=$_POST['codigo']; 
  $url= "http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$ruc&codigo=$codigo&tipdoc=1?";

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
  <title>Guía para Arrendamiento</title>
  <style>
    #capa3{ position:absolute;
     z-index:1;
     top: 355px;
     left: 580px;
     width:300px;
     height:12px;
    }
    #capa4{ position:absolute;
     z-index:1;
     top:296px;
     left: 309px;
     width:300px;
     height:12px;
    }
    #capa5{ position:absolute;
     z-index:1;
     top: 262px;
     left:630px;
     width:300px;
     height:12px;
    }
    #capa1{ position:absolute;
     z-index:1;
     top:187px;
     left:210px;
     width:300px;
     height:12px;
    }
    #capa2{
     position:absolute;
     z-index:0;
     top: 21px;
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
  <script>
    window.print();
  </script
</head>
<body>';

   $html .=' <div id="content">
    <div>
        <iframe id="optomaFeed" src=';
     $html .= $url;  
    $html .='  scrolling="no"
            frameborder="0" height="180" width="100%" style=" z-index: 1;position:absolute; clip: rect(10px,470px,30px,220px);
top: 180px;
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
  &nbsp;
  ';
  $html .= $anio;
  $html .=' 
  </div>
  <div id="capa4">
    <hr style="margin-bottom:-1px;">
  ';
  $html .= $cod;
  $html .=' 
    <hr style="margin-bottom: 14px;">
  ';
  $html .= $num;
  $html .=' 
  <br><br>
    <hr style="margin-bottom:-1px;">
    S/
  ';
  $html .= $monto;
  $html .=' 
  </div>
  <div id="capa5">
  ';
  $html .= $checksi;
  $html .=' 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  ';
  $html .= $checkno;
  $html .=' 
  </div>
  <div id="capa3">
  ';
  $html .= $operacion;
  $html .=' 
  <br><br>
    <hr style="margin-bottom: 5px;">
    S/
  ';
  $html .= $importe;
  $html .='   
  </div>
</body>
</html>
';
echo $html;

?>