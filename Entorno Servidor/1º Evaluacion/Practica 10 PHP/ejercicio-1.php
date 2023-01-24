<?php

$cadena = "Esta es la cadena de texto.";
$cadenaCambio = "e";
$cadenaSustituta = "a";

function sustituirCaracteres($cadena, $cadenaCambio, $cadenaSustituta) {
    if ($cadenaCambio == null) {
        $nuevaCadena = str_ireplace('a', $cadenaSustituta, $cadena);
    } else if ($cadenaSustituta == null) {
        $nuevaCadena = str_ireplace($cadenaCambio, '-', $cadena);
    } else {
        $nuevaCadena = str_ireplace($cadenaCambio, $cadenaSustituta, $cadena, $count);
        echo "Ha habido " . $count . " sustituciones." . "<br><br>";
    } 
    echo "La nueva cadena es: " . $nuevaCadena;
}

sustituirCaracteres($cadena, $cadenaCambio, $cadenaSustituta);

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
    <p><?php echo "La cadena original es: " . $cadena; ?></p>
</body>
</html>