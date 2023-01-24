<?php

function factorial($numero) {

    if ($numero < 0) {
        throw new Exception('No se puede hacer el factorial de un número negativo.');
    } else {

        $factorial = 1;

        for ($i = 1; $i <= $numero; $i++){ 
            $factorial = $factorial * $i; 
        }
        return $factorial;
    }
}

try {
    $resultado1 = factorial(-5);
    echo "Resultado 1: " . $resultado1 . "<br>";
} catch (Exception $e) {
    echo "Excepción: " . $e->getMessage() . "<br>";
} finally {
    echo "Primer finally." . "<br>";
}

try {
    $resultado2 = factorial(5);
    echo "Resultado 2: " . $resultado2 . "<br>";
} catch (Exception $e) {
    echo "Excepción: " . $e->getMessage() . "<br>";
} finally {
    echo "Segundo finally." . "<br>";
}