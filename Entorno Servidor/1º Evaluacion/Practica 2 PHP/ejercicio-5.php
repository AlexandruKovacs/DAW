<?php

$operando1 = 5;
$operando2 = 10;
$tipoOperacion = "*";

if ($tipoOperacion == "+") {
    
    $resultado = "El resultado de la suma es: " . ($operando1 + $operando2);

} elseif ($tipoOperacion == "-") {
    
    $resultado = "El resultado de la resta es: " . ($operando1 - $operando2);

} elseif ($tipoOperacion == "*") {
    
    $resultado = "El resultado de la multiplicación es: " . ($operando1 * $operando2);

} elseif ($tipoOperacion == "/") {
    
    $resultado = "El resultado de la división es: " . ($operando1 / $operando2);

} else {
    $resultado = "Introduce una operación correcta.";
}

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
    <p><?php echo $resultado; ?></p>
</body>
</html>