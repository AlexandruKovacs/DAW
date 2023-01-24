<?php 

$arrayNumeros = [1, 4, 5, 67, 5, 4, 2, 35, 78, 567, 67, 234, 57, 8, 6, 35, 67];
$numerosMayoresEliminados = [];
$numero = 20;

foreach ($arrayNumeros as $clave => $num) {
    if ($num > $numero) {
        unset($arrayNumeros[$clave]);
        $numerosMayoresEliminados[] = $num;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5-a | Alexandru Kovacs</title>
</head>
<body>
    <p>Los eliminados son: <pre><?php print_r($numerosMayoresEliminados); ?></pre></p>
</body>
</html>