<?php

$fechaActual = date_create("now");
$timestampActual = date_timestamp_get($fechaActual);

$fechaCumple = "2000-06-27";
$timestampFechaCumple = strtotime($fechaCumple);

$segundos = $timestampActual - $timestampFechaCumple;

$minutos = ceil($segundos / 60);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 | Alexandru Kovacs</title>
</head>
<body>
    <p>Han pasado <?php echo $minutos . ' minutos y ' . $segundos; ?> segundos desde tu cumpleaños.</p>
</body>
</html>