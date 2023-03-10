<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idTipo = $_POST['tipo'];
    $idAula = $_POST['aula'];
    $idGrupo = $_POST['grupo'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $usuario = $_SESSION['usuario'];

    $conn = mysqli_connect('localhost', 'id20430323_root', '9Qbgkf/eK-Z&CI|g', 'id20430323_gestor');
    
    $selectUsuarios = "SELECT * FROM profesores WHERE usuario = '$usuario' LIMIT 1";
    $resultado = mysqli_query($conn, $selectUsuarios);
    
    if(mysqli_num_rows($resultado) > 0) {

        $fila = mysqli_fetch_assoc($resultado);
        $idProfesor = $fila['id'];

        if ($idGrupo == null) {
            $insertarIncidencia = "INSERT INTO incidencias (idProfesor, idAula, idGrupo, tipoIncidencia, descripcion, fechaCreacion, estado, comentarios) 
            VALUES 
            ('$idProfesor', '$idAula', NULL, '$idTipo', '$descripcion', '$fecha', 'Creada', '-')";
        } else {
            $insertarIncidencia = "INSERT INTO incidencias (idProfesor, idAula, idGrupo, tipoIncidencia, descripcion, fechaCreacion, estado, comentarios) 
            VALUES 
            ('$idProfesor', '$idAula', '$idGrupo', '$idTipo', '$descripcion', '$fecha', 'Creada', '-')";
        }

        mysqli_query($conn, $insertarIncidencia);
        mysqli_close($conn);

        $response = [
            'success' => true,
            'redirectUrl' => 'menu-profesor.php'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'El usuario ya existe.'
        ];
    }
    echo json_encode($response);
}
