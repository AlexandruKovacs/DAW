<?php

$comidasAsoc = [
    'Lunes' => 'Patatas fritas', 
    'Martes' => 'Ensalada', 
    'Miércoles' => 'Salchichas',
    'Jueves' => 'Cocido',
    'Viernes' => 'Tortilla',
    'Sábado' => 'Migas',
    'Domingo' => 'Lentejas'
];

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
    <table border="1">
        <tr>
            <?php
                foreach($comidasAsoc as $dia => $comida) {
                    echo "<th>" . $dia . "</th>";
                }
            ?>
        </tr>
        <tr>
            <?php
                foreach($comidasAsoc as $dia => $comida) {
                    echo "<td>" . $comida . "</td>";
                }
            ?>
        </tr>
    </table>
</body>
</html>