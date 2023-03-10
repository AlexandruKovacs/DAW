<?php

$conn = new mysqli('localhost', 'id20430323_root', '9Qbgkf/eK-Z&CI|g', 'id20430323_gestor');

if ($conn->connect_error) {
  die('Conexión fallida: ' . $conn->connect_error);
}

$consulta = 'SELECT * FROM grupos';
$resultado = $conn->query($consulta);


if ($resultado->num_rows > 0) {

  $grupos = [];
  
  while($fila = $resultado->fetch_assoc()) {
    $grupos[] = $fila;
  }

} else {

  $grupos = [];
}

$JSONGrupos = json_encode($grupos);

header('Content-Type: application/json');
echo $JSONGrupos;

?>