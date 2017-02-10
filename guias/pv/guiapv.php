<!--<input type='button' onclick='window.print();' value='Imprimir' align="left" /></form> -->
<?php 
  $ruc = $_POST['ruc'];
  $mes = $_POST['mes'];
  $anio = $_POST['anio'];
  $codtribu = $_POST['codtribu'];
  $importe = $_POST['importe'];
  $tributo = $_POST['tributo'];
  $multas = $_POST['multas'];
  $gastos = $_POST['gastos'];
  $frac = $_POST['frac'];
  $trimul = $_POST['trimul'];
  $fraccionamiento = $_POST['fraccionamiento'];

  if ($tributo == TRUE ){
      $tributo = 'X';
   }
   if ($multas == TRUE ){
      $multas = 'X';
   }
   if ($gastos == TRUE ){
      $gastos = 'X';
   }
   if ($frac == TRUE ){
      $frac = 'X';
   }
   if ($anio == '')
  {
    $anio = '&nbsp;&nbsp;&nbsp;&nbsp;';
  }
  if ($ruc == '')
  {
    $ruc = '&nbsp;';
  }
  if ($codtribu == '')
  {
    $codtribu = '&nbsp;';
  }
   
$html='
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Guia para pagos varios</title>
  <style>
    #capa1{ position:absolute;
     z-index:1;
     top: 278px;
     left:270px;
     width:300px;
     height:12px;
    }
    #capa3{ position:absolute;
     z-index:1;
     top: 151px;
     left: 88px;
     width:300px;
     height:12px;
    }
    #capa4{ position:absolute;
     z-index:1;
     top: 495px;
     left: 560px;
     width:300px;
     height:12px;
    }
    #capa2{
     position:absolute;
     z-index:0;
     top: 22px;
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
  </script>

</head>
<body>
  <div id="capa2"> <img src="guiapv.jpg" /> </div>
  <div id="capa3">
   ';
  $html .= $tributo;
  $html .=' 
    <br>
  ';
  $html .= $multas;
  $html .='  
    <br>
  ';
  $html .= $gastos;
  $html .='  
    <br>
  ';
  $html .= $frac;
  $html .='
    <br>    
  </div>
  <div id="capa1">
  ';
  $html .= $ruc;
  $html .='
    <hr style="margin-bottom: 20px;">
  ';
  $html .= $anio;
  $html .='
    &nbsp;&nbsp;&nbsp;&nbsp;
  ';
  $html .= $mes;
  $html .='
    <hr style="margin-bottom:-2px;">
  ';
  $html .= $codtribu;
  $html .='
    <hr style="margin-bottom: 5px;">
  S/';
  $html .= $importe;
  $html .='
    <hr style="margin-bottom: 53px;">
  ';
  $html .= $trimul;
  $html .='
    <br>
  </div>
  <div id="capa4">
  ';
  $html .= $fraccionamiento;
  $html .='
  </div>
 
</body>
</html>
';  
  echo $html;

?>
