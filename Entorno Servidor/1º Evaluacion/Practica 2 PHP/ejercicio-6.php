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

$dia = "Viernes";

switch ($dia) {
    case "Lunes":
        $texto = "El " . $dia . " hay " . $comidasAsoc['Lunes'] . ".";
        break;
    case "Martes":
        $texto = "El " . $dia . " hay " . $comidasAsoc['Martes'] . ".";
        break;
    case "Miércoles":
        $texto = "El " . $dia . " hay " . $comidasAsoc['Miércoles'] . ".";
        break;
    case "Jueves":
        $texto = "El " . $dia . " hay " . $comidasAsoc['Jueves'] . ".";
        break;
    case "Viernes":
        $texto = "El " . $dia . " hay " . $comidasAsoc['Viernes'] . ".";
        break;
    case "Sábado":
        $texto = "El " . $dia . " hay " . $comidasAsoc['Sábado'] . ".";
        break;
    case "Domingo":
        $texto = "El " . $dia . " hay " . $comidasAsoc['Domingo'] . ".";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 | Alexandru Kovacs</title>
</head>
<body>
    <p><?php echo $texto; ?></p>
</body>
</html>