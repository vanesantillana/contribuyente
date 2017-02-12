<?php  
$archivo = "contador.txt"; // Archivo en donde se acumulará el numero de visitas
$abre = fopen($archivo, "r"); // Abrimos el archivo para solamente leerlo (r de read)
$total = fread($abre, filesize($archivo)); // Leemos el contenido del archivo(filesize "detectara" la longitud de Bytes de $archivo la cual desconocemos)
fclose($abre); // Cerramos la conexión al archivo
$abre = fopen($archivo, "w"); // Abrimos nuevamente el archivo (w de write)
$total = $total + 1; // Sumamos 1 nueva visita
$grabar = fwrite($abre, $total); // Y reemplazamos por la nueva cantidad de visitas
fclose($abre); // Cerramos la conexión al archivo

//echo " <span class='views'>".$total."</span>";
?>
<!--
<script>	
	// Hacemos la Function para abrir el contador de visitas
function recargar_views(){
    $(".views").load("./contador.txt");
}

// Establecemos el temporizador a 1 segundos
timer = setInterval("recargar_views()", 1000);

</script>-->