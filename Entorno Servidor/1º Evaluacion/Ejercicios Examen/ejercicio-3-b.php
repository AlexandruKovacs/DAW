<?php

$fecha = new DateTime('12-03-2022');
echo 'La fecha es: ' . $fecha->format('d-m-Y') . '<br/>';

$primavera = new DateTime('March 20');
$verano = new DateTime('June 20');
$otono = new DateTime('September 22');
$invierno = new DateTime('December 21');

switch(true) {
    case ($fecha >= $primavera && $fecha < $verano):
        $texto = 'Es primavera.';
        break;

    case ($fecha >= $verano && $fecha < $otono):
        $texto = 'Es verano.';
        break;

    case ($fecha >= $otono && $fecha < $invierno):
        $texto = 'Es otoño.';
        break;

    default:
        $texto = 'Es invierno.';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3-b | Examen</title>
</head>
<body>
    <p><?php echo $texto; ?></p>
</body>
</html>