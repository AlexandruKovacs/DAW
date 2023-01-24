<?php

$cadena = "anita lava la tina";
$cadena = str_replace(' ', '', $cadena);

if (strrev($cadena) == $cadena){ 
    $resultado = " es palíndroma.";
}
else{
    $resultado = " no es palíndroma.";
}

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
    <p><?php echo "La cadena " . $cadena . $resultado; ?></p>
</body>
</html>