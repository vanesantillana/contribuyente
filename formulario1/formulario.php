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
    $url_final= "http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$ruc&codigo=$codigo&tipdoc=1";
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
    <meta charset="utf-8">
    <title>Guía PAGO FÁCIL</title>
    <link rel="stylesheet" href="estilo.css" media="all" />
  </head>
  <body>
  <table width="100%" border="0">
    <tr>
      <td colspan="2" align="center"><hr><h2>SÓLO PARA SER USADO COMO BORRADOR - PARA PERIODOS TRIBUTARIOS</h2><hr></td>
    </tr>
    <tr>
      <td align="center"><h1>Guía PAGO FÁCIL NUEVO RÉGIMEN ÚNICO SIMPLIFICADO</h1></td>
      <td align="center">
        <div id="logo">
        <img src="logo.gif" border="0" width="250" height="65">
      </td>
    </tr>
    <tr>
      <td colspan="2"><hr><h3>EN  CASO  DE  RECTIFICATORIA: SÓLO PODRÁ RECTIFICAR LA CATEGORÍA Y/O EL TOTAL INGRESOS BRUTOS DEL MES, PARA LO CUAL DEBERÁ LLENAR TODOS LOS DATOS DE ESTA GUÍA</h3></td>
    </tr>
  </table>
  <hr>
  <table width="100%" border="0">
  <tr>
   <td colspan="2">
   <div width=20><iframe src="';
    $html .=$url_final;
    $html .= '" width="335" height="40" frameborder="no" Scrolling="no" style="margin-left: 0px; margin-top: -10px;" >
</iframe> </div>';


   	
   	$html .= '</td>
  </tr>
  <tr>
   <th align="leaf">PERÍODO TRIBUTARIO:</th>
   <td>';

   	$html .= $mes;
   	$html .= '-';
   	$html .= $anio;
    $html .= '</td>
   <td rowspan="5">
      <table width="100%" border="1" cellspacing=0 cellpadding=0>
        <tr>
          <th align="right">
          <center>
           ¿ES LA PRIMERA VEZ QUE DECLARA PARA ESTE PERÍODO?
           <p><b><big><big>';
   	$html .= $valor;
   	$html .= '</big></big> </b></p>
           De haber marcado NO, deberá proporcionar la información de la Compensación  de  las  Percepciones  de  IGV  y/o  de  los  pagos efectuados  en  la  declaración  original  que  se  está  rectificando.
            <p><b><big>COMPENSACIÓN  Y/O PAGOS EFECTUADOS:</big></b></p>
            <p><b><big><big>S/ ';
   	$html .= $compensacion;
   	$html .= '</big></big></b></p>
            <u>IMPORTANTE:</u> Si está presentando una declaración rectificatoria, NO OLVIDE consignar los montos compensados y/o los pagos efectuados en la declaración original.
          </center>
          </th>
        </tr>
      </table>      
   </td>
  </tr>
  <tr>
  <th align="leaf">TOTAL INGRESOS BRUTOS DEL MES:</th>
   <td>S/';
   	$html .= $ingresos; 
   	$html .= '</td>
  </tr>
  <tr>
   <th align="leaf">CATEGORÍA:</th>
   <td>';
   	$html .= $categoria;
    $html .= '</td>
  </tr>
  <tr>
   <th align="leaf">MONTO A COMPENSAR POR PERCEPCIONES: </th>
   <td>S/ ';
   	$html .= $percepciones;
    $html .= '</td>
  </tr>
  <tr>
   <th align="leaf">IMPORTE A PAGAR:</th>
   <td>S/ ';
   $html .= $pagar;
   $html .= '</td>
  </tr>
  </table>

  <hr>
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

  //$mpdf->writeHTML($html);
  //$mpdf->Output();
?>
