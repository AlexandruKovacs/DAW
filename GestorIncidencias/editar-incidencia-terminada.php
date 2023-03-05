<?php

session_start();

if (!isset($_SESSION['usuario'])) {

  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar comentarios | Incidencias</title>

    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<nav class="nav-bar">
        <div class="logo-container">
            <a class="refresh" href="menu-admin.php">
                <img src="img/logo.png" alt="Imagen Logo">
            </a>
        </div>
        <div class="info-container">
            Bienvenido/a <?php echo strtoupper($_SESSION['usuario']); ?>.
            <a class="logout" href="server/cerrar-sesion.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
        </div>
    </nav>

    <main class="main-editar-incidencia" id="mainEditar">
        <div class="form-container">
            <h2>Comentarios de la incidencia</h2>
            <div id="mensaje"></div>

            <form id="formComentarios" class="form-comentarios">
                <div>
                    <label for="comentarios">Añadir comentarios</label>
                    <textarea name="comentarios" id="comentarios"></textarea>
                </div>

                <div>
                    <button class="editar" id="editar">Editar cometarios</button>
                </div>

                <div>
                    <a class="atras" id="atras" href="ver-incidencias-terminadas.php">Atrás</a>
                </div>
            </form>
        </div>
    </main>
    <div class="caja-correcto" id="cajaCorrecto">
        <img src="img/success.png" alt="Imagen correcto" class="img-correcto">
        <p>Comentarios modificados correctamente.</p>
        <div class="navegacion">
            <a href="ver-incidencias-terminadas.php"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
    </div>
    <script src="js/consts.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/editar-comentarios.js"></script>
    <script src="js/main.js"></script>
</body>
</html>