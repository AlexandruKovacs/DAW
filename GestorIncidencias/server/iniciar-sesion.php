<?php

session_start();

if (isset($_SESSION['usuario'])) {

    header("Location: ../menu-profesor.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $password = hash('sha512', $password);

    $conexion = new mysqli('localhost', 'root', '', 'gestor');

    $sql = "SELECT * FROM profesores WHERE usuario = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('s', $usuario);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {

        $fila = $resultado->fetch_assoc();
        $idUsuario = $fila['id'];
        $usuarioBD = $fila['usuario'];
        $passwordBD = $fila['password'];
        $nombre = $fila['nombre'];
        $apellidosBD = $fila['apellidos'];

        if ($password == $passwordBD && $usuarioBD == 'CTIC') {

            $_SESSION['usuario'] = $nombre . ' ' . $apellidosBD;

            header('Location: ../menu-admin.php');
            exit();

        } else if ($password == $passwordBD && $usuarioBD !== 'CTIC') {

            $_SESSION['usuario'] = $nombre . ' ' . $apellidosBD;

            header('Location: ../menu-profesor.php');
            exit();
            
        } else {
            echo 'La contraseña es incorrecta.';
        }
    } else {
        echo 'El usuario no existe.';
    }
}
?>