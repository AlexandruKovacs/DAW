<?php

$cadenaInicial = "Este es la cadena de ejemplo";

$vocales = array("a", "e", "i", "o", "u");
$cadenaEnLetras = str_split($cadenaInicial);

$cadenaFinal = sort($cadenaEnLetras);
$cadenaFinal = str_replace($vocales, '', $cadenaEnLetras);
$cadenaFinal = implode('', $cadenaFinal);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 | Alexandru Kovacs</title>
</head>
<body>
    <p>La cadena final es: <?php echo $cadenaFinal; ?></p>
</body>
</html>