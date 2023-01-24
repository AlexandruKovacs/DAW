<?php

echo '<pre>';

$conexion = mysqli_connect('localhost', 'root', '', 'prueba');

// $update = "UPDATE users SET name = 'alex',
//                             email = 'alex22@correo.com'
//  WHERE id = 1";

$delete = "DELETE FROM users WHERE id = 2";

$return = mysqli_query($conexion, $delete);

print_r($return);

mysqli_close($conexion);

?>