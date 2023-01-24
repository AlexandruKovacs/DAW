<?php

$numero = 5;
$numeroMaximo = 50;

include("numeroPrimo.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 | Alexandru Kovacs</title>
</head>
<body>
    <p><?php esPrimo($numero); ?></p>
    <p><?php echo "son los números primos menores de  $numeroMaximo." . generarPrimo($numeroMaximo); ?></p>
</body>
</html>