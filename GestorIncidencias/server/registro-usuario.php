<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $departamento = $_POST['departamento'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $correo = $_POST['correo'];

    $conn = mysqli_connect('localhost', 'root', '', 'gestor');
    
    $selectUsuarios = "SELECT * FROM profesores WHERE usuario = '$usuario' LIMIT 1";
    $resultado = mysqli_query($conn, $selectUsuarios);
    
    if(mysqli_num_rows($resultado) > 0) {
        echo 'El usuario ya existe.';
        exit();
    }
    
    $password = hash('sha512', $password);
    $password2 = hash('sha512', $password2);

    if ($password != $password2) {
        echo 'Las contraseñas no son iguales.';
        exit();
    }

    $insertaUsuario = "INSERT INTO profesores (nombre, apellidos, idDepartamento, usuario, password, correo) 
            VALUES 
            ('$nombre', '$apellidos', '$departamento', '$usuario', '$password', '$correo')";

    mysqli_query($conn, $insertaUsuario);
    mysqli_close($conn);

    $_SESSION['usuario'] = $nombre . ' ' . $apellidos;
    header('Location: ../menu-profesor.php');

}