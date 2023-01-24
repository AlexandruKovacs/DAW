<?php

function escribirPalabra($palabra) {

    static $numeroAleatorio;
    srand(time());

    $numeroAleatorio = rand(1, 100);
    $tripleNumAleatorio = $numeroAleatorio * 3;

    for ($i = $numeroAleatorio; $i <= $tripleNumAleatorio; $i++) {
        echo $palabra;
    }
}

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
    <p><?php escribirPalabra("Palabra"); ?></p>
</body>
</html>