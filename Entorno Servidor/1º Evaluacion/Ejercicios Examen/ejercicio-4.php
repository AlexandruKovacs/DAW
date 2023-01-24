<?php

function multiplicar($numero1, $numero2) {

    if ($numero1 < $numero2) {
        return multiplicar($numero2, $numero1);

    } else if ($numero2 != 0) {
        return ($numero1 + multiplicar($numero1, $numero2 - 1));

    }
    return 0;
}

function multiply($numero1, $numero2) {
    if ($numero2 > 0) {
        return $numero1 + multiply($numero1, $numero2 - 1);

    } else if ($numero2 < 0) {
        return -$numero1 + multiply($numero1, $numero2 + 1);

    }
    return 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | Examen</title>
</head>
<body>
    <p><?php echo(multiplicar(2, 90)); ?></p>
    <p><?php echo(multiply(9, 10)); ?></p>
</body>
</html>