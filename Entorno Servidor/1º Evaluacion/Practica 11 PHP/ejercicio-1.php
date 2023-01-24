<?php

$arrayFunciones = ["aDecimetros", "aCentimetros", "aMilimetros"];
$altura = 1.78;

function aDecimetros($altura) {
    $resultado = $altura * 1000;
    echo "La altura en decímetros es: " . $resultado . " dm";
}

function aCentimetros($altura) {
    $resultado = $altura * 10000;
    echo "La altura en centímetros es: " . $resultado . " cm";
}

function aMilimetros($altura) {
    $resultado = $altura * 100000;
    echo "La altura en milímetros es: " . $resultado . " mm";
}

for ($i = 0; $i < sizeof($arrayFunciones); $i++) {
    $funcion = $arrayFunciones[$i];
    echo $funcion($altura) . "<br>";
}

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
    <p>La altura en metros es: <?php echo $altura; ?> m</p>
</body>
</html>