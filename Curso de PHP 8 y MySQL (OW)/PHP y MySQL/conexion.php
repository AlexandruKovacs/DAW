<?php

echo '<pre>';

$conexion = mysqli_connect('localhost', 'root', '', 'prueba');
// print_r($conexion);

$insert = "INSERT INTO users(name, email) values('pepe', 'pepe@correo.com')";
$return = mysqli_query($conexion, $insert);
print_r($return);

mysqli_close($conexion);

?>