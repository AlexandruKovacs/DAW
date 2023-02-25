<?php

session_start();

if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == 'CTIC') {

    header("Location: menu-admin.php");
    exit();
} else if (isset($_SESSION['usuario']) && $_SESSION['usuario'] !== 'CTIC') {

    header("Location: menu-profesor.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión | Incidencias</title>

    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

</head>
<body>
    
    <main class="main-login">
        <div class="form-container">
            <div id="mensaje"></div>
            <img src="img/logo.png" alt="Imagen Logo" class="logo">

            <form class="form-login" id="formLogin">
                
                <div class="usuario-container">
                    <!-- <label for="usuario">Usuario</label> -->
                    <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                </div>
                <div class="password-container">
                    <!-- <label for="password">Contraseña</label> -->
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                </div>

                <button class="acceder" id="acceder">Acceder</button>

            </form>

            <p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
        </div>
    </main>
    <script src="js/login.js"></script>
</body>
</html>