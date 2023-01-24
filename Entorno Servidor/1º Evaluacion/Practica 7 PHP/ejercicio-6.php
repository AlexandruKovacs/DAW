<?php

$palabras = [
    "palabra",
    "ciclo",
    "formativo",
    "superior",
    "ordenar"
];

function ordenarPorSegundaLetra($primeraLetra, $segundaLetra) {

    $primeraLetra = $primeraLetra[1];
    $segundaLetra = $segundaLetra[1];
 
    return strcmp($primeraLetra, $segundaLetra);
}

usort($palabras, 'ordenarPorSegundaLetra');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 | Alexandru Kovacs</title>
</head>
<body>
    <p><pre><?php print_r($palabras); ?></pre></p>
</body>
</html>