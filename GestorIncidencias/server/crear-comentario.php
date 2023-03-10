<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $comentarios = $_POST['comentarios'];

    require ('config/conexion.php');

    if (mysqli_connect_errno()) {
        echo 'Error al conectarse a MySQL: ' . mysqli_connect_error();
        exit();
    }

    $idIncidencia = $_POST['idIncidencia'];
    $comentarios = $_POST['comentarios'];
    
    $updateComentario = "UPDATE incidencias SET comentarios = '$comentarios' WHERE id = '$idIncidencia'";
    $resultado = mysqli_query($conn, $updateComentario);

    if ($resultado) {
        $response = [
            'success' => true,
            'message' => 'El comentario ha sido actualizado correctamente.'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Error al actualizar el comentario: ' . mysqli_error($conexion)
        ];
    }

    echo json_encode($response);
    mysqli_close($conn);
}
