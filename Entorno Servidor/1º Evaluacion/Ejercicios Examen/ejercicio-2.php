<?php

$arrayNumeros = [10, 30, -5, 6, -10];
$suma = 0;

foreach ($arrayNumeros as $numero) {
    $suma += $numero;
}

$media = $suma / count($arrayNumeros);

echo 'Los números mayores de la media son: ';
foreach ($arrayNumeros as $numero) {
    if ($numero > $media) {
        echo $numero . ', ';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 | Examen</title>
</head>
<body>
    <p>La media es: <?php echo $media; ?></p>
</body>
</html>