<?php 	
/*	$url_origen="http://www.sunat.gob.pe/cl-ti-itmrconsruc/captcha?accion=image";
	$archivo_destino="captcha.jpeg";
	$mi_curl = curl_init ($url_origen); 
	$fs_archivo = fopen ($archivo_destino, "w"); 
	curl_setopt ($mi_curl, CURLOPT_FILE, $fs_archivo); 
	curl_exec ($mi_curl); 
*//*
$fichero = 'http://www.sunat.gob.pe/cl-ti-itmrconsruc/captcha?accion=image';
$nuevo_fichero = 'captcha.jpeg';
if (!copy($fichero, $nuevo_fichero)) {
    echo "Error al copiar $fichero...\n";
} 
//$filename='captcha.jpg';
//imagepng("captcha.jpg", "captcha.png");
//echo exec('mogrify -format png captcha.jpg');
//echo "<pre>$salida</pre>";
//$formato= system('./sc', $retval1);
$formato=exec('./sc');
//$ultima_linea = system('tesseract captcha.png nuevo', $retval);
//echo '<pre>';
 $fp = fopen("nuevo.txt", "r");
$linea = fgets($fp);
echo $linea ;
/*
$RUC="10164181826";

$url_final= "http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$RUC&codigo=$linea&tipdoc=1";
//echo $url_final;

function codigo_fuente($url){
    $url = file($url);
    $codigo = '';
    foreach ($url as $numero => $linea) { 
        $codigo .= '#<strong>' . $numero . '</strong> : ' . htmlspecialchars($linea) . '<br />';
    }
    return $codigo;
}
 
// Ejemplo de uso

*/

?>
<iframe src="http://www.sunat.gob.pe/cl-ti-itmrconsruc/captcha?accion=image"> width="100" height="100" align="center"></iframe>

<form name="formulario" method="post" action="recep.php">
	<input type="text" name="ruc" id="ruc"/>
	<input type="text" name="codigo" id="codigo" />
	<input type="submit" />
</form>

<!--

<a href="javascript: window.location='http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc='+document.getElementById('ruc').value+'&codigo='+document.getElementById('codigo').value+'&tipdoc=1';">ir</a>
-->