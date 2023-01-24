<?php

function buscarValorMinimo($array) {
    echo "El valor mínimo es: " . min($array) . ".";
}

function buscarValorMaximo($array) {
    echo "El valor máximo es: " . max($array) . ".";
}

function mediaArray($array) {
    $suma = array_sum($array);
    $cantNumeros = count($array);

    $media = $suma / $cantNumeros;
    echo "La media es: " . $media . ".";
}

function estaEnArray($array, $numero) {
    $posicion = array_search($numero, $array);

    if(array_search($numero, $array)) {
        echo "El número " . $numero . " está en el array en la posición " . $posicion . ".";
    } else {
        echo "El número " . $numero . " no está en el array.";
    }
}

?>