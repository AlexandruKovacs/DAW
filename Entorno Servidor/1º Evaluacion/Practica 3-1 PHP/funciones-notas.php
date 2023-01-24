<?php

function calcularMedia($notas) {
    $sumaDeNotas = array_sum($notas);
    $numeroDeNotas = count($notas);
    $media = $sumaDeNotas / $numeroDeNotas;
    echo number_format($media, 2);
}

function notaMaxima($notas) {
    $notaMaxima = max($notas);
    echo $notaMaxima;
}

function notaMinima($notas) {
    $notaMinima = min($notas);
    echo $notaMinima;
}

function alumnosAprobados($notas) {
    $alumnosAprobados = 0;
    for ($i = 0; $i < count($notas); $i++) {

        if ($notas[$i] >= 5) {
            $alumnosAprobados++;
        }
    }
    echo $alumnosAprobados;
}

function alumnosSuspensos($notas) {
    $alumnosSuspensos = 0;
    for ($i = 0; $i < count($notas); $i++) {

        if ($notas[$i] < 5) {
            $alumnosSuspensos++;
        }
    }
    echo $alumnosSuspensos;
}

?>