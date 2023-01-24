<?php 

$alumnos = [
    'Alexandru' => '2000-06-27',
    'Javier' => '2002-12-21',
    'Adrian' => '2001-03-12',
    'Jhon' => '1998-04-29'
];

ksort($alumnos);

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
    <p><pre><?php print_r($alumnos); ?></pre></p>
</body>
</html>