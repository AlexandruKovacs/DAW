<?php

$n = 5;
$suma = 0;

for ($i = 0; $i <= $n; $i++) {
    $suma += $i;
    $promedio = $suma / $n;
}

$texto = "El promedio de los " . $n . " primeros números es: " . $promedio;

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
    <p><?php echo $texto; ?></p>
</body>
</html>