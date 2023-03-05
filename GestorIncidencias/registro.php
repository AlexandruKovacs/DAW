<?php

session_start();

if (isset($_SESSION['usuario'])) {

    header('Location: menu-profesor.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate | Incidencias</title>

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
    <main class="main-register">
        <div class="form-container">
            <img src="img/logo.png" alt="Imagen Logo" class="logo">
            <div id="mensaje"></div>

            <form class="form-register" id="formRegister">
                <div>

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos">

                    <label for="correo">Correo corporativo</label>
                    <input type="email" name="correo" id="correo">
                    
                </div>
                <div>
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario">

                    <label for="password">Contraseña</label>
                    <div class="input-icon">
                        <input type="password" name="password" id="password">
                        <i class="fa-regular fa-eye" id="showPassword"></i>
                    </div>

                    <label for="password2">Confirmar contraseña</label>
                    <div class="input-icon">
                    <input type="password" name="password2" id="password2">
                        <i class="fa-regular fa-eye" id="showPassword2"></i>
                    </div>
                </div>

                <div>
                    <label for="departamento">Departamento</label>
                    <select name="departamento" id="departamento">
                        <option value="">Selecciona tu departamento</option>
                    </select>
                </div>

                <div>
                    <a class="atras" id="atras" href="index.php">Atrás</a>
                </div>
                <div>
                    <button class="registrar" id="registrar">Registrarme</button>
                </div>
                
            </form>
        </div>
    </main>
    <script src="js/consts.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/registro.js"></script>
</body>
</html>