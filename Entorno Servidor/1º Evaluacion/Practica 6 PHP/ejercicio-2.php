<?php

$cadena1 = "Hola, ";
$cadena2 = "123456789";
$numero = 6;

$posicion2 = strlen($cadena2) - $numero;

$textoFinal = substr($cadena1, 0, $numero) . substr($cadena2, $posicion2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 | Alexandru Kovacs</title>
</head>
<body>
    <p>La nueva cadena es: <?php echo $textoFinal; ?></p>
</body>
</html>