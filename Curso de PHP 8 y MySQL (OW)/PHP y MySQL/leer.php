<?php

echo '<pre>';

$conexion = mysqli_connect('localhost', 'root', '', 'prueba');

$sql = "SELECT * FROM users";

$resultado = mysqli_query($conexion, $sql);
$rows = mysqli_fetch_array($resultado, MYSQLI_BOTH);
// print_r($rows);

do {
    $datos[] = $rows;
} while ($rows = mysqli_fetch_array($resultado, MYSQLI_BOTH));

print_r($datos);

mysqli_close($conexion);