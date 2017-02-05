<?php 
$ruc = $_POST['ruc'];
$codigo=$_POST['codigo'];


function codigo_fuente($url){
    $url = file($url);
    $codigo = '';
    foreach ($url as $numero => $linea) { 
        $codigo .= '#<strong>' . $numero . '</strong> : ' . htmlspecialchars($linea) . '<br />';
    }
    return $codigo;
}
 



$url_final= "http://www.sunat.gob.pe/cl-ti-itmrconsruc/jcrS00Alias?accion=consPorRuc&nroRuc=$ruc&codigo=$codigo&tipdoc=1";
//echo $url_final;
//header("Location: $url_final");

function obtenerhtml($url){
$fo= fopen("$url","r") or die ("No se ha encontrado la pagina.");
while (!feof($fo)) {
$codigohtml .= fgets($fo, 4096);
}
fclose ($fo);
return $codigohtml;
}
  

?>


<iframe src=<?php echo $url_final ?> width="335" height="40" frameborder="no" Scrolling="no" style="margin-left: -76px; margin-top: -17px;" >
</iframe> 

