<?php 

$year = 2022;
$unoSept = date("l", mktime(0, 0, 0, 9, 1, $year));

include('funciones.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario | Alexandru Kovacs</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <h2 class="curso">
        <?php mostrarCurso($year); ?>
    </h2>
    <div class="contenedorTabla">
        <?php generarCalendario($year, $unoSept); ?>
    </div>
    <div class="contenedorLegend">
        <ul class="legend">
            <h3>Leyenda</h3>
            <li><span class="festivo"></span>Festivos y fines de semana</li>
            <li><span class="noFestivo"></span>No festivo</li>
            <li><span class="inicioFin"></span>Inicio y fin de curso</li>
        </ul>
    </div>
</body>
</html>