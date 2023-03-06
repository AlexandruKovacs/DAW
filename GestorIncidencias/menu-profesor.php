<?php

session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] === 'CTIC') {

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
    <?php require('view/banner-user-view.php'); ?>

    <div class="menu-principal">
        <div>
            <a href="nueva-incidencia.php">
                <button id="crearIncidencia" class="crear-incidencia" name="crear-incidencia">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </a>
            <p>Nueva incidencia</p>
        </div>

        <div>
            <a href="ver-incidencias.php">
                <button id="listarIncidencias" class="listar-incidencias" name="listar-incidencias">
                    <i class="fa-solid fa-list"></i>
                </button>
            </a>
            <p>Tus incidencias</p>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>