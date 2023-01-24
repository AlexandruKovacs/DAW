<?php

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

function recorrerMatriz($matriz, $indiceFila, $indiceColumna) {

    $m = 3;
    $n = 3;

    if ($indiceColumna >= $m) {
        return 0;
    }
    if ($indiceFila >= $n) {
        return 1;
    }

    print_r($matriz[$indiceFila][$indiceColumna] . ', ');
 
    if (recorrerMatriz($matriz, $indiceFila, $indiceColumna + 1) == 1) {
        return 1;
    }
        
    return recorrerMatriz($matriz, $indiceFila + 1, 0);
}

recorrerMatriz($matriz, 0, 0);

function mostrarMatriz($matriz, $fila, $columna) {
    $totalColumna = count($matriz[$fila] - 1);
    $totalFila = count($matriz)-1;

    echo $matriz[$fila][$columna]. '..';
    if ($totalColumna == $columna) {
        echo '<br>';
    }

    if(($fila == $totalFila) && ($columna == $totalColumna)) {
        echo 'Hemos terminado...';
    } else {
        if ($totalColumna == $columna) {
            $fila++;
            $columna = 0;
        } else {
            $columna++;
        }
        mostrarMatriz($matriz, $fila, $columna++);
    }
}

mostrarMatriz($matriz, 0, 0);

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
    
</body>
</html>