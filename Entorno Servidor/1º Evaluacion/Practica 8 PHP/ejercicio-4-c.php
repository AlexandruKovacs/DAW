<?php 

$arrayNumeros = [];
$numerosMenores = [];
$cantidadNumeros = 20;
$numero = 50;

for ($i = 0; $i < $cantidadNumeros; $i++) {
    array_push($arrayNumeros, rand(1,100));
}

foreach ($arrayNumeros as $num) {
    if ($num < $numero) {
        array_push($numerosMenores, $num);
    }
}

$numerosMenores = array_slice($numerosMenores, 0, 10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4-c | Alexandru Kovacs</title>
</head>
<body>
    <p>El array es: <pre><?php print_r($arrayNumeros); ?></pre></p>
    <p>Los 10 primeros menores números del array son: <pre><?php print_r($numerosMenores); ?></pre></p>
</body>
</html>