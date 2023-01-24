<?php 

function esPrimo($numero) {
    for ($i = 2; $i < $numero; $i++) { 
        if (($numero % $i) == 0) {
            return false;
        }
    }
    return true;
}

if (esPrimo($numero)) {
    echo "Es primo.";
} else {
    echo "No es primo.";
}

function generarPrimo($numeroMaximo) {
    for($i = 0; $i < $numeroMaximo; $i++) {
        if (esPrimo($i)) {
            echo $i . ", "; 
        }
    }
}

?>