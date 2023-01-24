<?php

$timestamp = time();

$formato = "d\/m\/Y";
$fechaFormateada = date($formato, $timestamp);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Alexandru Kovacs</title>
</head>
<body>
    <p>El timestamp actual del servidor es: <?php echo $timestamp; ?></p>
    <p>La fecha formateada es: <?php echo $fechaFormateada; ?></p>
</body>
</html>