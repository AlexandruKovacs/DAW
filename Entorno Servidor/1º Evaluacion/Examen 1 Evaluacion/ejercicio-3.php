<?php

// Apartado A ***

// DETERMINAMOS UNA FECHA
$fechaCumple = '2000-06-27';

// OBTENEMOS EL AÑO CON STRTOTIME QUE LO QUE HACE ES CONVERTIR LA FECHA EN FORMA DE CADENA A DATE()
$yearCumple = date('Y', strtotime($fechaCumple));

//OBTENEMOS EL AÑO ACTUAL
$yearActual = date('Y');

// CALCULAMOS LA EDAD EN DIAS RESTANDO EL AÑO ACTUAL CON EL AÑO DEL CUMPLEAÑOS Y LO MULTIPLICAMOS POR 365
$edadEnDias = ($yearActual - $yearCumple) * 365;

// PARA OBTENER LA EDAD EN SEMANAS DIVIDIMOS LA EDAD EN DÍAS ENTRE 7
$edadEnSemanas = $edadEnDias / 7;


// Apartado B ***

// ESTABLECEMOS UNA FECHA
$fecha = '12-08-2022'; 

// PARSEAMOS ESA FECHA CON STRTOTIME Y EL FORMATO d-m-Y
$fecha = date('d-m-Y', strtotime($fecha));

// CREAMOS LOS INTERVALOS DE LAS ESTACIONES DEL AÑO CON DATETIME. 
// SE DEBE ESCRIBIR EL MES EN INGLES Y EN MINÑUSCULAS DEBIDO AL FORMATO d-'m'-Y 
$primavera = new DateTime('March 21');
$verano = new DateTime('June 21');
$otono = new DateTime('September 22');
$invierno = new DateTime('December 21');

// SWITCH QUE VA CAMBIANDO EL VALOR DEL TEXTO EN FUNCIÓN DEL RANGO EN EL QUE SE ENCUENTRE LA FECHA
switch(true) {
    case ($fecha >= $primavera && $fecha <= $verano):
        $texto = 'Es primavera.';
        break;

    case ($fecha >= $verano && $fecha <= $otono):
        $texto = 'Es verano.';
        break;

    case ($fecha >= $otono && $fecha <= $invierno):
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
    <title>Ejercicio 3 | Examen</title>
</head>
<body>
    <h3>Ejercicio 3</h3>
    <p>Ejercicio 3-a: Tu edad en semanas es: <?php echo number_format($edadEnSemanas, 2, ',', ' ') ?></p>
    <p>Ejercicio 3-b: <?php echo $texto; ?></p>
</body>
</html>