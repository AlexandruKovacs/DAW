<?php

$comidas = ['Patatas fritas', 'Ensalada', 'Salchichas', 'Cocido', 'Tortilla', 'Migas', 'Lentejas'];
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
    <title>Ejercicio 1 | Alexandru Kovacs</title>
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
            <td><?php echo $comidas[0]; ?></td>
            <td><?php echo $comidas[1]; ?></td>
            <td><?php echo $comidas[2]; ?></td>
            <td><?php echo $comidas[3]; ?></td>
            <td><?php echo $comidas[4]; ?></td>
            <td><?php echo $comidas[5]; ?></td>
            <td><?php echo $comidas[6]; ?></td>
        </tr>
        <tr>
            <td><?php echo $comidasAsoc['Lunes']; ?></td>
            <td><?php echo $comidasAsoc['Martes']; ?></td>
            <td><?php echo $comidasAsoc['Miércoles']; ?></td>
            <td><?php echo $comidasAsoc['Jueves']; ?></td>
            <td><?php echo $comidasAsoc['Viernes']; ?></td>
            <td><?php echo $comidasAsoc['Sábado']; ?></td>
            <td><?php echo $comidasAsoc['Domingo']; ?></td>
        </tr>
    </table>
</body>
</html>