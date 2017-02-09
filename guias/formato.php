<!DOCTYPE html>
<html lang="en">
<body>
  <input type='button' onclick='window.print();' value='Imprimir' /></form> 
</body>
</html>
<?php  
   $ruc = $_POST['ruc'];
   $mes = $_POST['mes'];
   $valor = $_POST['valor'];
   $anio = $_POST['anio'];
   $ingresos = $_POST['ingresos'];
   $percepciones = $_POST['percepciones'];
   $compensacion = $_POST['compensacion'];
     
    $codigo=$_POST['codigo'];
    $url_final= "http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$ruc&codigo=$codigo&tipdoc=1";
   if ($percepciones == ''){$percepciones = '0.00';}
   if ($valor == TRUE ){
      $valor = 'SI';
      $compensacion = '0.00';
   }
   else{
      $valor = 'NO';
   }

   $infloat = (float) $ingresos;

   if ($infloat <= 5000.0) {
        $categoria = '1';
        $pagar = '20.0';
    } else {
        $categoria = '2';
        $pagar = '50.0';
    }

   $html = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formato</title>
    <link rel="stylesheet" href="estilo1.css" media="all" />
  </head>
  <body>
    <hr style="visibility: hidden;">
    <h2>SÓLO PARA SER USADO COMO BORRADOR - PARA PERIODOS TRIBUTARIOS</h2>
      <div id="logo">
        <img src="logo.gif" border="0" width="250" height="65" align="right">

      </div>
  <h1>Guía PAGO FÁCIL NUEVO RÉGIMEN ÚNICO SIMPLIFICADO</h1>
  <h3>EN  CASO  DE  RECTIFICATORIA: SÓLO PODRÁ RECTIFICAR LA CATEGORÍA Y/O EL TOTAL INGRESOS BRUTOS DEL MES, PARA LO CUAL DEBERÁ LLENAR TODOS LOS DATOS DE ESTA GUÍA</h3>  
  <table width="100%" border="0">
  <tr>
   <th colspan="3">
     <div width=20><iframe src="';
      $html .=$url_final;
      $html .= '" width="780" height="30" frameborder="no" Scrolling="no" style="margin-left: 0px; margin-top: -10px;" >
  </iframe> </div>
    </th> 
  </tr>';


    
    $html .= '
  <tr>
   <th>PERÍODO TRIBUTARIO:</th>
   <td>';

    $html .= $mes;
    $html .= '-';
    $html .= $anio;
    $html .= '</td>
   <td rowspan="5">
     <h5>
      <hr style="visibility: hidden;">
       <b>¿ES LA PRIMERA VEZ QUE DECLARA PARA ESTE PERÍODO?</b><br>
       <p><b><big><big>';
    $html .= $valor;
    $html .= '</big></big> </b></p>
        <p><b><big>COMPENSACIÓN  Y/O PAGOS EFECTUADOS:</big></b></p>
        <p><b><big><big>S/ ';
    $html .= $compensacion;
    $html .= '</big></big></b></p>
        <u>IMPORTANTE:</u> Si está presentando una declaración rectificatoria,<br> NO OLVIDE consignar los montos compensados y/o los pagos<br> efectuados en la declaración original.<br>
        <hr style="visibility: hidden;">
     </h5>
   </td>
  </tr>
  <th>TOTAL INGRESOS BRUTOS DEL MES:</th>
   <td>S/ ';
    $html .= $ingresos; 
    $html .= '</td>
  </tr>
  <tr>
   <th>CATEGORÍA:</th>
   <td>';
    $html .= $categoria;
    $html .= '</td>
  </tr>
  <tr>
   <th>MONTO A COMPENSAR POR PERCEPCIONES: </th>
   <td>S/ ';
    $html .= $percepciones;
    $html .= '</td>
  </tr>
  <tr>
   <th>IMPORTE A PAGAR:</th>
   <td>S/ ';
   $html .= $pagar;
   $html .= '</td>
  </tr>
  </table>

  <hr style="visibility: hidden;">
  <h4>
    <u>IMPORTANTE:</u><br>
    (1)Este importe se obtendrá de la suma de los comprobantes de pago emitidos durante el período tributario a declarar.<br>
    (2)Consigne información sólo si le hubiesen efectuado Percepciones de IGV y opte por compensarlas. El monto máximo que puede compensar es el monto de la cuota (incluye intereses moratorios, sólo si corresponde)<br>
    (3)Si elpago lo está realizando fuera de plazo, incluya en el IMPORTE A PAGAR los intereses moratorios correspondientes.
  </h4>


</body>
</html>
';
  echo $html;
?>
