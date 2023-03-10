<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $comentarios = $_POST['comentarios'];
    $idIncidencia = $_POST['idIncidencia'];

    require ('../config/conexion.php');
    
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
