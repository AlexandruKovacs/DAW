<?php

require ('../config/conexion.php');

if ($conn->connect_error) {
  die('Conexión fallida: ' . $conn->connect_error);
}

$consulta = 'SELECT * FROM tipos_incidencias';
$resultado = $conn->query($consulta);


if ($resultado->num_rows > 0) {

  $tiposIncidencias = [];
  
  while($fila = $resultado->fetch_assoc()) {
    $tiposIncidencias[] = $fila;
  }

} else {

  $tiposIncidencias = [];
}

$JSONTiposIncidencias = json_encode($tiposIncidencias);

header('Content-Type: application/json');
echo $JSONTiposIncidencias;

?>