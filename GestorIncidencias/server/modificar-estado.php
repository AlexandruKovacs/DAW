<?php

$idIncidencia = $_POST['idIncidencia'];
$nuevoEstado = $_POST['nuevoEstado'];

require ('../config/conexion.php');

if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}

$updateEstado = "UPDATE incidencias SET estado = '$nuevoEstado' WHERE id = $idIncidencia";

if ($conn->query($updateEstado) === TRUE) {
    echo 'El estado de la incidencia se ha actualizado correctamente';
} else {
    echo 'Error al actualizar el estado de la incidencia: ' . $conn->error;
}

$conn->close();

?>
