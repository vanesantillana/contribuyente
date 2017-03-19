<?php 
  $ruc = $_POST['ruc'];
  $nombre = $_POST['nombre'];
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
    if( $valor == '')
      return $valor;
    $v=strstr_after($valor, '.');
    if($v=='')
      return $valor.'.00';
    return $valor;
  }

   
$html='
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Guia para pagos varios</title>
  <style>
    #capa1{ 
      padding-top: 4px;
      position: absolute;
      z-index: 1;
      top: 373px;
      left: 353px;
      width: 553px;
      height: 26px;
      background-color: white;
    }
    #capa3{ position:absolute;
     z-index:1;
     top: 207px;
     left: 100px;
     width:300px;
     height:12px;
    }
    #capa6{
      position: absolute;
      top: 1500px;
      font-weight: normal;
      font-size: 14px;
      letter-spacing: 2px
    }
    #capa4{ position:absolute;
     z-index:1;
     top: 668px;
     left: 799px;
     width:300px;
     height:12px;
    }
    #capa2{
     position:absolute;
     z-index:0;
     top: 22px;
    }
    #capa2 img{
      width: 1050px;
      height: 800px;
  }
    body {
      position: relative;
      width: 21cm;  
      height: 18cm;  
      margin: 0 auto; 
      margin-left: 0px;
      left: 30px;
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
                top: 369px;
    left: 430px;"></iframe>
    </div>
</div>';

$html.='
  <div id="capa2"> <img src="guiapv.jpg" /> </div>
  <div id="capa3">
   ';
  $html .= $tributo;
  $html .=' 
    <br>
    <hr style="margin-bottom: -2px;">
  ';
  $html .= $multas;
  $html .='  
    <br>
    <hr style="margin-bottom: -4px;">
  ';
  $html .= $gastos;
  $html .='  
    <br>
    <hr style="margin-bottom: -4px;">
  ';
  $html .= $frac;
  $html .='
    <br>    
  </div>
  <div id="capa1">
  &nbsp;&nbsp;&nbsp;&nbsp;';
  $html .= $ruc.' - '.$nombre;
  $html .='
    <hr style="margin-bottom: 39px;">
  ';
  $html .= $anio;
  $html .='
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  ';
  $html .= $mes;
  $html .='
    <hr style="margin-bottom: 8px;">
  &nbsp;&nbsp;';
  $html .= $codtribu;
  $html .='
    <hr style="margin-bottom: 17px;">
  &nbsp;&nbsp;S/.';
  $html .= agrega($importe);
  $html .='
    <hr style="margin-bottom: 85px;">
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
  <div id="capa6"><p>Modelo de factura generado por <a href="http://elbuencontribuyente.com">http://elbuencontribuyente.com</a> para fines académicos</p></div>
 
</body>
</html>
';  
  echo $html;

?>
