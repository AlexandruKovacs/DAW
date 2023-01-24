<?php

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function compararArrays($array1, $array2) {
    if (($array1 == null) && ($array2 == null)) {
        return true;
    } elseif (count($array1) != count($array2)) {
        return false;
    } elseif ($array1[0] == $array2[0]) {
        return compararArrays(array_slice($array1, 1), array_slice($array2, 1));
    } else {
        return false;
    }
}

if (compararArrays($array1, $array2)) {
    echo 'Son iguales.';
} else {
    echo 'Son diferentes.';
}

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
    
</body>
</html>