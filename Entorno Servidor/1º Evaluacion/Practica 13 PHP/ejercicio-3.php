<?php

$fechaCumple = "27-06-2000";
$fechaActual = date("d-m-Y");
$edad = date_diff(date_create($fechaCumple), date_create($fechaActual));

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
    <p>Tu edad es: <?php echo $edad->format('%Y'); ?></p>
</body>
</html>