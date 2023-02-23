<?php

$idProfesor = $_GET['idProfesor'];

$conn = new mysqli('localhost', 'root', '', 'gestor');

if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}

$consulta = "SELECT * FROM incidencias WHERE idProfesor = '$idProfesor'";
$resultado = $conn->query($consulta);


if ($resultado->num_rows > 0) {

    $incidencias = [];
  
    while($fila = $resultado->fetch_assoc()) {
        $incidencias[] = $fila;
    }

} else {

    $incidencias = [];
}

$JSONIncidencias = json_encode($incidencias);

header('Content-Type: application/json');
echo $JSONIncidencias;

?>