 <?php 
	$url="http://www.sunat.gob.pe/cl-ti-itmrconsruc/FrameCriterioBusquedaMovil.jsp";
    function codigo_fuente($url){
    $url = file($url);
    $codigo = '';
    foreach ($url as $numero => $linea) { 
        $codigo .= '#<strong>' . $numero . '</strong> : ' . htmlspecialchars($linea) . '<br />';
    }
    return $codigo;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="width:600px;height:900px; position:relative; float: left; ">
        <iframe src=<?php echo $url ?> style="top:0px; position:absolute" width="600" height="900" scrolling="no" frameborder="1" >
    	<p>Texto alternativo para navegadores que no aceptan iframes.</p>
        </iframe>
    </div>

    <div style="width:600px;height:900px; position:relative;  float: left;">
        <?php echo codigo_fuente("localhost/RUC/"); ?>
    </div>
    
</body>
</html>