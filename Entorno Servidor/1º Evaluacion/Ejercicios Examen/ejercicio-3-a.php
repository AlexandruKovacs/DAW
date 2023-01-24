<?php

$fechaCumple = '2000-06-27';

$yearCumple = date('Y', strtotime($fechaCumple));
$yearActual = date('Y');

$edadEnDias = ($yearActual - $yearCumple) * 365;

$edadEnSemanas = $edadEnDias / 7;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3-a | Examen</title>
</head>
<body>
    <p>Tu edad en semanas es: <?php echo number_format($edadEnSemanas, 2, ',', ' ') ?></p>
</body>
</html>