<?php

$cadena = "Este es el texto del ejercicio 5.";
$buscar = "5";

$primeraOcurrencia = strpos($cadena, $buscar);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 | Alexandru Kovacs</title>
</head>
<body>
    <p>La primera ocurrecia de la cadena '<?php echo $buscar;?>' es en la posición <?php echo $primeraOcurrencia; ?>.</p>
</body>
</html>