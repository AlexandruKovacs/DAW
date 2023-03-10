<?php

require ('../config/conexion.php');

if ($conn->connect_error) {
  die('Conexión fallida: ' . $conn->connect_error);
}

$consulta = 'SELECT * FROM departamentos';
$resultado = $conn->query($consulta);


if ($resultado->num_rows > 0) {

  $departamentos = [];
  
  while($fila = $resultado->fetch_assoc()) {
    $departamentos[] = $fila;
  }

} else {

  $departamentos = [];
}

$JSONDepartamentos = json_encode($departamentos);

header('Content-Type: application/json');
echo $JSONDepartamentos;

?>