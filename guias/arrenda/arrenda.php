<input type='button' onclick='window.print();' value='Imprimir' align="left" /></form> 
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
  <div id="capa2"> <img src="arrenda.jpg" /> </div>
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