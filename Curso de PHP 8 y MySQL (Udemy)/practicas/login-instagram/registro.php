<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $errores = '';

    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .= '<p class="error">Por favor, introduce todos los datos correctamente.</p>';
    } else {
        try {
            $conexion = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_58208ebe070916a', 'b66bf92d1dc3ba', 'a78b28d9');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<p class="error">El nombre de usuario ya existe.</p>';
        }

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if($password != $password2) {
            $errores .= '<p class="error">Las contraseñas no son iguales</p>';
        }
    }

    if ($errores == '') {
        $statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, password) VALUES (null, :usuario, :password)');
        $statement->execute(array(
            ':usuario' => $usuario, 
            ':password' => $password
        ));

        header('Location: login.php');
    }
}

require 'views/registro.view.php';

?>