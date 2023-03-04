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
    <title>Menú principal | Incidencias</title>

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
            <a class="refresh" href="menu-profesor.php">
                <img src="img/logo.png" alt="Imagen Logo">
            </a>
        </div>
        <div class="info-container">
            <div class="theme-container">
                <i class="fa-solid fa-brightness"></i>
                    <input type="checkbox" class="toggle" id="tema" checked>
                <i class="fa-solid fa-moon"></i>
            </div>
            Profesor/a <?php echo $_SESSION['nombreApellidos']; ?>.
            <a class="logout" href="server/cerrar-sesion.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
        </div>
    </nav>

    <div class="menu-principal">
        <div>
            <a href="nueva-incidencia.php">
                <button id="crearIncidencia" class="crear-incidencia">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </a>
            <p>Nueva incidencia</p>
        </div>

        <div>
            <a href="ver-incidencias.php">
                <button id="listarIncidencias" class="listar-incidencias">
                    <i class="fa-solid fa-list"></i>
                </button>
            </a>
            <p>Tus incidencias</p>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>