<?php
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
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formato</title>
    <link rel="stylesheet" href="estilo1.css" media="all" />
  </head>
  <body>
    <input type='button' onclick='window.print();' value='Imprimir' /></form> 

    <hr style="visibility: hidden;">
    <h2>SÓLO PARA SER USADO COMO BORRADOR - PARA PERIODOS TRIBUTARIOS</h2>
      <div id="logo">
        <img src="logo.gif" border="0" width="250" height="65" align="right">

      </div>
	<h1>Guía PAGO FÁCIL NUEVO RÉGIMEN ÚNICO SIMPLIFICADO</h1>
	<h3>EN  CASO  DE  RECTIFICATORIA: SÓLO PODRÁ RECTIFICAR LA CATEGORÍA Y/O EL TOTAL INGRESOS BRUTOS DEL MES, PARA LO CUAL DEBERÁ LLENAR TODOS LOS DATOS DE ESTA GUÍA</h3>  

  <table width="100%" border="0">
  <tr>
    <td colspan="2">
   <div width=20><iframe src="http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$ruc&codigo=$codigo&tipdoc=1" width="335" height="40" frameborder="no" Scrolling="no" style="margin-left: 0px; margin-top: -10px;" >
</iframe> </div>
</td>
   <!--<th>NÚMERO DE RUC:</th>
   <td colspan="2"><?php $url_final?></td>-->
  </tr>
  <tr>
   <th>PERÍODO TRIBUTARIO:</th>
   <td>01-2017</td>
   <td rowspan="5">
     <h5>
      <hr style="visibility: hidden;">
       <b>¿ES LA PRIMERA VEZ QUE DECLARA PARA ESTE PERÍODO?</b><br>
       <p><b><big><big>SI / NO</big></big> </b></p>
       De haber marcado NO, deberá proporcionar la información de la<br> Compensación  de  las  Percepciones  de  IGV  y/o  de  los  pagos<br> efectuados  en  la  declaración  original  que  se  está  rectificando.<br>
        <p><b><big>COMPENSACIÓN  Y/O PAGOS EFECTUADOS:</big></b></p>
        <p><b><big><big>S/ 0.00</big></big></b></p>
        <u>IMPORTANTE:</u> Si está presentando una declaración rectificatoria,<br> NO OLVIDE consignar los montos compensados y/o los pagos<br> efectuados en la declaración original.<br>
        <hr style="visibility: hidden;">
     </h5>
   </td>
  </tr>
  <th>TOTAL INGRESOS BRUTOS DEL MES:</th>
   <td>S/ 300000.00</td>
  </tr>
  <tr>
   <th>CATEGORÍA:</th>
   <td>1</td>
  </tr>
  <tr>
   <th>MONTO A COMPENSAR POR PERCEPCIONES: </th>
   <td>S/ 00.00</td>
  </tr>
  <tr>
   <th>IMPORTE A PAGAR:</th>
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
