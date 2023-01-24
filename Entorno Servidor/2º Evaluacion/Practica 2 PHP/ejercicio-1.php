<?php

require 'vendor/autoload.php';
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1 style="text-align: center;">¡Hola Mundo!</h1>');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A5', 'vertical');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>