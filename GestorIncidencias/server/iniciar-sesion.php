<?php

session_start();

if (isset($_SESSION['usuario'])) {

    header('Location: ../menu-profesor.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $password = hash('sha512', $password);

    require ('../config/conexion.php');

    $sql = 'SELECT * FROM profesores WHERE usuario = ?';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $usuario);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {

        $fila = $resultado->fetch_assoc();
        $idUsuario = $fila['id'];
        $usuarioBD = $fila['usuario'];
        $passwordBD = $fila['password'];
        $nombreBD = $fila['nombre'];
        $apellidosBD = $fila['apellidos'];

        if ($password == $passwordBD && $usuarioBD == 'CTIC') {

            $_SESSION['usuario'] = $usuario;
            $_SESSION['idProfesor'] = $idUsuario;
            $_SESSION['nombreApellidos'] = $nombreBD . ' ' . $apellidosBD;
            $response = [
                'success' => true,
                'redirectUrl' => 'menu-admin.php'
            ];

        } else if ($password == $passwordBD && $usuarioBD !== 'CTIC') {

            $_SESSION['usuario'] = $usuario;
            $_SESSION['idProfesor'] = $idUsuario;
            $_SESSION['nombreApellidos'] = $nombreBD . ' ' . $apellidosBD;
            $response = [
                'success' => true,
                'redirectUrl' => 'menu-profesor.php'
            ];
            
        } else {
            $response = [
                'success' => false,
                'message' => 'Acceso inválido. Por favor, inténtelo otra vez.'
            ];
        }
    } else {
        $response = [
            'success' => false,
            'message' => 'Acceso inválido. Por favor, inténtelo otra vez.'
        ];
    }

    echo json_encode($response);
}
?>