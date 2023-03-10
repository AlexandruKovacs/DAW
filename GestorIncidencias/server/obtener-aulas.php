<?php

$conn = new mysqli('localhost', 'id20430323_root', '9Qbgkf/eK-Z&CI|g', 'id20430323_gestor');

if ($conn->connect_error) {
  die('Conexión fallida: ' . $conn->connect_error);
}

$consulta = 'SELECT * FROM aulas_estancias';
$resultado = $conn->query($consulta);


if ($resultado->num_rows > 0) {

  $aulas = [];
  
  while($fila = $resultado->fetch_assoc()) {
    $aulas[] = $fila;
  }

} else {

  $aulas = [];
}

$JSONAulas = json_encode($aulas);

header('Content-Type: application/json');
echo $JSONAulas;

?>