<?php

function mostrarDigitos($numero) {

    $longitudNumero = strlen($numero);

    if ($numero > 0 && $longitudNumero < $numero) {
        mostrarDigitos($numero/10); 
    }

    printf("%d, ", $numero % 10);
}
    
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
    <p><?php mostrarDigitos(1234); ?></p>
</body>
</html>