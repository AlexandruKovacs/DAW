<?php

function buscarFilaArrayBi($array, $fila) {
    print_r($array[$fila]);
}

function buscarColumnaArrayBi($array, $columna) {
    print_r(array_column($array, $columna));
}

function coordenadasArrayBi($array, $elemento) {
    $x = -1;
    $y = -1;
    foreach ($array as $clave1 => $fila) {
        foreach ($fila as $clave2 => $valor) {
            if ($valor == $elemento && $x == -1) {
                $x = $clave1;
                $y = $clave2;
            }
        }
    }
    echo "Las coordenadas del elemento '" . $elemento . "' son: { $x, $y }";
}

?>