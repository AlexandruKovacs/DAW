<?php

$numeros = array('m', 'h', 'l');

if(count($numeros) < 30){
    $numeros = array_pad($numeros, 15, 'm');
    $numeros = array_pad($numeros, -30, 'l');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 | Alexandru Kovacs</title>
</head>
<body>
    <p><pre><?php print_r($numeros); ?></pre></p>
</body>
</html>