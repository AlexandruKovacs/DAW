<?php

$arrayNumeros = [1, 4, 5, 67, 5, 4, 2, 35, 78, 567, 67, 234, 57, 8, 6, 35, 67];
$elementosMayores = [];
$nuevosElementos = ["elemento 1", "elemento 2", "elemento 3", "elemento 4", "elemento 5"];
$numero = 20;

rsort($arrayNumeros);
$arrayNumeros = array_slice($arrayNumeros, 0, 5);

foreach ($arrayNumeros as $clave => $num) {
    if ($num > $numero) {
        $elementosMayores[] = $num;
    }
}

$arrayNumeros = array_replace($elementosMayores, $nuevosElementos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5-d | Alexandru Kovacs</title>
</head>
<body>
    <p>Los elementos mayores son: <pre><?php print_r($elementosMayores); ?></pre></p>
    <p>Los elementos sustituídos son: <pre><?php print_r($arrayNumeros); ?></pre></p>
</body>
</html>