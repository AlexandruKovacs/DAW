<?php

require ('../config/conexion.php');

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