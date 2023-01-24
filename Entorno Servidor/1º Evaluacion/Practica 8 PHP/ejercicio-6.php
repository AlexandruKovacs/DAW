<?php 

$cadena = "123, 20, 67, 75, 55, 678, 17, 180, 80, 40";

$arrayCadena = explode(",", $cadena);
sort($arrayCadena);

foreach($arrayCadena as $clave => $valor) {
    if ($valor > 100 || $valor < 50) {
        unset($arrayCadena[$clave]);
    }
}

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
    <p>La cadena convertida a array resultante es: <pre><?php print_r($arrayCadena); ?></pre></p>
</body>
</html>