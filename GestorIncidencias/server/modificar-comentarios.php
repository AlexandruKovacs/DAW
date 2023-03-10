<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $comentarios = $_POST['comentarios'];
    $idIncidencia = $_POST['idIncidencia'];

    $conn = mysqli_connect('localhost', 'id20430323_root', '9Qbgkf/eK-Z&CI|g', 'id20430323_gestor');
    
    $updateComentarios = "UPDATE incidencias SET comentarios = '$comentarios' WHERE id = '$idIncidencia'";
    
    if (mysqli_query($conn, $updateComentarios)) {
        $response = [
            'success' => true
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Ha ocurrido un error inesperado'
        ];
    }

    mysqli_close($conn);

    echo json_encode($response);
}
