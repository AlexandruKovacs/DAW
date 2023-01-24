<?php

$cadena = 'Ciclo de Grado Superior de Desarrollo de Aplicaciones Web; Ciclo de Grado Superior de Desarrollo de Aplicaciones Multiplataforma; Ciclo de Grado Medio Sistemas Microinformáticos y Redes';

$palabraABuscar = 'cIcLo';
$posicion = stripos($cadena, $palabraABuscar, 20);

if ($posicion === false) {
    echo 'La palabra a buscar no está en la cadena.';
} else {
    echo 'La palabra a buscar está en la posición : ' . $posicion;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1-a | Examen</title>
</head>
<body>
    
</body>
</html>