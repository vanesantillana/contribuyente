<?php
    include(“../Mpdf.php”);
    $mpdf=new mPDF();

    // La variable $html es vuestro código que queréis pasar a PDF
    $html = utf8_encode($html);

    $mpdf->WriteHTML($html);

    // Genera el fichero y fuerza la descarga
    $mpdf->Output(‘nombre.pdf’,’D’); exit;
?>