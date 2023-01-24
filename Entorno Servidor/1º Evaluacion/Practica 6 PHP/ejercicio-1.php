<?php 

$cadena1 = "Hola, ésta es la cadena 1";
$cadena2 = "Hola, ésta es la cadena de ejemplo 2";
$caracteresIguales = similar_text($cadena1, $cadena2);

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
    <p>El número de caracteres que se repite es: <?php echo $caracteresIguales; ?></p>
</body>
</html>