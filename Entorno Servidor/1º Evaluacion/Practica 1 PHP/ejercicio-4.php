<?php

$entero = 20;
$decimal = 1.5;
$texto = "Hola, este es el texto del ejercicio 4.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | Alexandru Kovacs</title>
</head>
<style>
    table, td {
        border: 1px solid;
    }
</style>
<body>
    <table>
        <tr>
            <td><?php echo gettype($entero); ?></td>
            <td><?php echo $entero; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($decimal); ?></td>
            <td><?php echo $decimal; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($texto); ?></td>
            <td><?php echo $texto; ?></td>
        </tr>
    </table>
</body>
</html>

