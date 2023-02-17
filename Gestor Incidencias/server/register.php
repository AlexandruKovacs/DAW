<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $departamento = $_POST['departamento'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];

    $conn = mysqli_connect('localhost', 'root', '', 'gestor');

    $consulta = "INSERT INTO profesores (nombre, apellidos, idDepartamento, usuario, password, correo) 
            VALUES 
            ('$nombre', '$apellidos', '$departamento', '$usuario', '$password', '$correo')";

    mysqli_query($conn, $consulta);

    mysqli_close($conn);

    $_SESSION['usuario'] = $nombre . ' ' . $apellidos;
    header('Location: ../menu-profesor.php');

}