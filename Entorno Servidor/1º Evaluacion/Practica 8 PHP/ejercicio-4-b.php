<?php 

$arrayNumeros = [];
$numerosMayores = [];
$cantidadNumeros = 20;
$numero = 20;

for ($i = 0; $i < $cantidadNumeros; $i++) {
    array_push($arrayNumeros, rand(1,100));
}

foreach ($arrayNumeros as $num) {
    if ($num > $numero) {
        array_push($numerosMayores, $num);
    }
}

$numerosMayores = array_slice($numerosMayores, 0, 10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4-b | Alexandru Kovacs</title>
</head>
<body>
    <p>El array es: <pre><?php print_r($arrayNumeros); ?></pre></p>
    <p>Los 10 primeros mayores números del array son: <pre><?php print_r($numerosMayores); ?></pre></p>
</body>
</html>