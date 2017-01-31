<?php  

include("../lib/mpdf.php");
   $mpdf = new mPDF();
   
   $html = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formulario1</title>
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
      <td colspan="2"><hr><h3>EN  CASO  DE  RECTIFICATORIA: SÓLO PODRÁ RECTIFICAR LA CATEGORÍA Y/O EL TOTAL INGRESOS BRUTOS DEL MES, PARA LO CUAL DEBERÁ LLENAR TODOS LOS DATOS DE ESTA GUÍA</h3><hr></td>
    </tr>
  </table>

  <table width="100%" border="0">
  <tr>
   <th align="leaf">NÚMERO DE RUC:</th>
   <td colspan="2">12345678900 - NASH VENT</td>
  </tr>
  <tr>
   <th align="leaf">PERÍODO TRIBUTARIO:</th>
   <td>01-2017</td>
   <td rowspan="5">
      <hr><center>
       ¿ES LA PRIMERA VEZ QUE DECLARA PARA ESTE PERÍODO?
       <p><b><big><big>SI / NO</big></big> </b></p>
       De haber marcado NO, deberá proporcionar la información de la Compensación  de  las  Percepciones  de  IGV  y/o  de  los  pagos<br> efectuados  en  la  declaración  original  que  se  está  rectificando.
        <p><b><big>COMPENSACIÓN  Y/O PAGOS EFECTUADOS:</big></b></p>
        <p><b><big><big>S/ 0.00</big></big></b></p>
        <u>IMPORTANTE:</u> Si está presentando una declaración rectificatoria, NO OLVIDE consignar los montos compensados y/o los pagos<br> efectuados en la declaración original.
      </center>
      <hr>
   </td>
  </tr>
  <tr>
  <th align="leaf">TOTAL INGRESOS BRUTOS DEL MES:</th>
   <td>S/ 30000.00</td>
  </tr>
  <tr>
   <th align="leaf">CATEGORÍA:</th>
   <td>1</td>
  </tr>
  <tr>
   <th align="leaf">MONTO A COMPENSAR POR PERCEPCIONES: </th>
   <td>S/ 0.00</td>
  </tr>
  <tr>
   <th align="leaf">IMPORTE A PAGAR:</th>
   <td>S/ 20.00</td>
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
$mpdf->writeHTML($html);
$mpdf->Output();

?>
