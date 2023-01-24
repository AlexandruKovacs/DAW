<?php

$cadenaInicial = "Este es la cadena del ejercicio 6.";
$vocales = array("a", "e", "i", "o", "u");

$cadenaFinal = str_replace($vocales, "*", $cadenaInicial);
$cadenaFinal = str_replace(' ', '', $cadenaFinal);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 | Alexandru Kovacs</title>
</head>
<body>
    <p>La cadena final es: <?php echo $cadenaFinal; ?></p>
</body>
</html>