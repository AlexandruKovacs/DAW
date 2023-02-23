<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $departamento = $_POST['departamento'];

    $password = hash('sha512', $password);

    $conn = mysqli_connect('localhost', 'root', '', 'gestor');
    
    $selectUsuarios = "SELECT * FROM profesores WHERE usuario = '$usuario' LIMIT 1";
    $resultado = mysqli_query($conn, $selectUsuarios);
    
    if(mysqli_num_rows($resultado) > 0) {
        $response = [
            'success' => false,
            'message' => 'El usuario ya existe.'
        ];
    } else {

        $insertaUsuario = "INSERT INTO profesores (nombre, apellidos, idDepartamento, usuario, password, correo) 
                VALUES 
                ('$nombre', '$apellidos', '$departamento', '$usuario', '$password', '$correo')";
    
        $idProfesor = $conn->insert_id;
        mysqli_query($conn, $insertaUsuario);
        mysqli_close($conn);
    
        $_SESSION['usuario'] = $usuario;
        $_SESSION['idProfesor'] = $idProfesor;
        $_SESSION['nombreApellidos'] = $nombre . ' ' . $apellidos;
        $response = [
            'success' => true,
            'redirectUrl' => 'menu-profesor.php'
        ];
    }

    echo json_encode($response);
}