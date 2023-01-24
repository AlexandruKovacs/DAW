<?php

$fechaFormateada = date("H:m:s", gmmktime(0));

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
    <p>La hora GMT actual es: <?php echo $fechaFormateada; ?></p>
</body>
</html>