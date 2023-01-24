<?php

function areaTriangulo($base, $altura) {

  $resultado = ($base * $altura) / 2;

  return $resultado;
}

$area = areaTriangulo(10, 10);

echo 'El triangulo tiene un area de: ' . $area . ' metros cuadrados';

?>
