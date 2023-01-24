<?php

function calcularPotencia($base, $exponente) {
    
    if ($exponente == 0) {
        return 1;
    } else {
        return $base * calcularPotencia($base, $exponente - 1);
    }
    
}

echo calcularPotencia(6, 3);

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
    
</body>
</html>