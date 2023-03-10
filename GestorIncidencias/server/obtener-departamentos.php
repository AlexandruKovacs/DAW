<?php

$conn = new mysqli('localhost', 'id20430323_root', '9Qbgkf/eK-Z&CI|g', 'id20430323_gestor');

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