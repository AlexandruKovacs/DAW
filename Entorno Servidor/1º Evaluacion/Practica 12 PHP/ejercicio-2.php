<?php

$numero = 13;

function decimalABinario($numero){

    if ($numero >= 1) {
        decimalABinario($numero / 2);
        echo ($numero % 2);
    }
}

echo "El número $numero en binario es: ";
decimalABinario($numero);

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
    
</body>
</html>