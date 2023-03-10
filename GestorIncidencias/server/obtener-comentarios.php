<?php

$idIncidencia = $_GET['idIncidencia'];

$conn = mysqli_connect('localhost', 'id20430323_root', '9Qbgkf/eK-Z&CI|g', 'id20430323_gestor');
$result = mysqli_query($conn, "SELECT comentarios FROM incidencias WHERE id = $idIncidencia");
$comentarios = mysqli_fetch_assoc($result)['comentarios'];

echo json_encode(array('comentarios' => $comentarios));

mysqli_close($conn);