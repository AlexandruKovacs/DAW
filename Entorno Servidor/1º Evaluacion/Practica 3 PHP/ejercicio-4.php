<?php

$num_secreto = 24;

for ($i = 1; $i <= 100; $i++) {

    if ($i == $num_secreto) {
        $texto = "El número secreto es el: " . $num_secreto;
        break;
    } else {
        $texto = "El número secreto no está en el rango establecido.";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | Alexandru Kovacs</title>
</head>
<body>
    <p><?php echo $texto; ?></p>
</body>
</html>