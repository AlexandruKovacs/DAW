<?php

$arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$matrizNumeros = [
    [1, 2, 3, 3],
    [4, 5, 6, 3],
    [7, 8, 9, 3]
];

$numero = 12;
$fila = 1;
$columna = 2;
$elemento = 3;

include("funcionesArrays.php");
include("funcionesArraysBi.php");

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
    <!-- FUNCIONES ARRAYS -->
    <p><?php buscarValorMinimo($arrayNumeros); ?></p>
    <p><?php buscarValorMaximo($arrayNumeros); ?></p>
    <p><?php mediaArray($arrayNumeros); ?></p>
    <p><?php estaEnArray($arrayNumeros, $numero); ?></p>

    <!-- FUNCIONES ARRAYS BI -->
    <p>Fila: <?php buscarFilaArrayBi($matrizNumeros, $fila); ?></p>
    <p>Columna: <pre><?php buscarColumnaArrayBi($matrizNumeros, $columna); ?></pre></p>
    <p><?php coordenadasArrayBi($matrizNumeros, $elemento); ?></p>
</body>
</html>