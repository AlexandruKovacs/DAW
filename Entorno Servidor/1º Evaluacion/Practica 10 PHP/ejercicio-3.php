<?php

function unirTexto() {
    $numeroCadenasTexto = 5;
    $arrayCadenas = [];
    $resultado = "";

    for ($i = 0; $i < $numeroCadenasTexto; $i++) {
        $arrayCadenas[] = func_get_arg($i);
    }

    foreach($arrayCadenas as $texto){
        $resultado = $resultado . ' ' . $texto;
    }
    echo $resultado;
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
    <p>La cadena concatenada es: <?php unirTexto("Hola", "que", "tal", "estas", "hoy."); ?></p>
</body>
</html>