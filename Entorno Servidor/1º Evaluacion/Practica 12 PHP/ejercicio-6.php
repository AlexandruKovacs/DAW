<?php 

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 

function contieneNumero($array, $longitud, $numero) {
    
    if($array[0] == $numero) {
        return true;
    }
    
    if($longitud == count($array)){
        return false;
    } else {
     	return contieneNumero($array, $longitud - 1, $numero);   
    }
}

$longitud = count($array);

if (contieneNumero($array, $longitud, 2)) {
    echo 'Contiene el número';
} else {
    echo 'No contiene el número';
}

$array1 = [1, 1, 20, 7, 300, -5];

function existeNum($array1, $i) {
    static $pos = 0;
    if ($pos == count($array1)) {
        return false;
    } else {
        if ($array1[$pos] == $i) {
            return true;
        } else {
            $pos++;
            return existeNum($array1, $i);
        }
    }
}

if (existeNum($array1, 20)) {
    echo 'Contiene el número';
} else {
    echo 'No contiene el número';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 | Alexandru Kovacs</title>
</head>
<body>
    
</body>
</html>