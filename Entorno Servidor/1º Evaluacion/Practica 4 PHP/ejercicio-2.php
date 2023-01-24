<?php

$operacion = "sumar";
$numero1 = 10;
$numero2 = 30;

switch ($operacion) {
    case 'sumar':
        $paginaCargada = include("sumar.php");
        break;
    
    case 'restar':
        $paginaCargada = include("restar.php");
        break;

    case 'multiplicar':
        $paginaCargada = include("multiplicar.php");
        break;

    case 'dividir':
        $paginaCargada = include("dividir.php");
        break;
    
    default:
        echo "Introduzca una operación correcta.";
        break;
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
    <p><?php $paginaCargada; ?></p>
</body>
</html>