<?php

$numeros1 = fopen('numeros-1.txt', 'r');
$numeros2 = fopen('numeros-2.txt', 'r');
$numerosIguales = fopen('numerosIguales.txt' , 'w');

$contenido1 = file_get_contents('numeros-1.txt');
$contenido2 = file_get_contents('numeros-2.txt');

$arrayContenido1 = explode(',', $contenido1);
$arrayContenido2 = explode(',', $contenido2);

fwrite($numerosIguales, "Numeros que estan en ambos ficheros: \n\n");
for ($i = 0; $i < count($arrayContenido1); $i++) {
    for ($j = 0; $j < count($arrayContenido2); $j++) {
            
        if (in_array($arrayContenido1[$i], $arrayContenido2)) {
            fwrite($numerosIguales, $arrayContenido1[$i]);
            break;
        }
    }
}
fwrite($numerosIguales, "\n\nNumeros que no estan en ambos ficheros: \n\n");
for ($i = 0; $i < count($arrayContenido1); $i++) {
    for ($j = 0; $j < count($arrayContenido2); $j++) {
    
        if (!in_array($arrayContenido1[$i], $arrayContenido2)) {
            fwrite($numerosIguales, $arrayContenido1[$i]);
            break;
        }
    }
}

if ($numerosIguales === false) {
    echo "No se encuentra numerosIguales.txt" . "<br>";
} else {
    echo "numerosIguales.txt se creó con éxito." . "<br>";
}

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
    
</body>
</html>