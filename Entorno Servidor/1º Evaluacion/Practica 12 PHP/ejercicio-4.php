<?php

$array1 = [1, 12, 2, 20, 30, 40, 50, 123, 12];

function coincideNumeroIndice($array1, $i = 0) {
    if ($i == count($array1)) {
        return false;
    }

    if ($array1[$i] == $i) {
        return true;
    } else {
        return coincideNumeroIndice($array1, ++$i);
    }
}

if (coincideNumeroIndice($array1, $i = 0)) {
    echo "Coincide.";
} else {
    echo "No coincide.";
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
    
</body>
</html>