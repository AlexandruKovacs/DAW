<?php

$cadena = "Pio Baroja";
$vocales = array("a", "e", "i", "o", "u");

function eliminarVocales($cadena) {
    $cadena = strrev($cadena);
    $trozosCadena = str_split($cadena);

    if (strlen($cadena) == 0) {
        return $cadena;
    }

    $caracter = substr($cadena, 0);
    
    if ($caracter == 'a' || $caracter == 'e' || $caracter == 'i' || $caracter == 'o' || $caracter == 'u') {
        return eliminarVocales(substr($cadena, 1));
    } else {
        return eliminarVocales(str($cadena)) + 1;
    }

}

eliminarVocales($cadena);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | Examen</title>
</head>
<body>
    
</body>
</html>