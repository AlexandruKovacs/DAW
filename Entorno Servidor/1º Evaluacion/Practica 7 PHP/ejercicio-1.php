<?php

$alumnos = [
    'Javier García Tena',
    'Jhon Tixi',
    'Alexandru Kovacs',
    'Adrián Mata',
    'Carlos Almendros'
];

$numeroDeAlumnos = count($alumnos);
sort($alumnos);

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
    <h2>Alumnos matriculados en 2º DAW curso 2021/2022</h2>
    <p>El número de alumnos matriculados en 2º DAW es: <?php echo $numeroDeAlumnos; ?> alumnos.</p>
    <p><pre><?php print_r($alumnos); ?></pre></p>
</body>
</html>