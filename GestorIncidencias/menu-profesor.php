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
</head>
<body>
    <nav class="nav-bar">
        <div class="logo-container">
            <a class="refresh" href="menu-profesor.php">
                <img src="img/logo.png" alt="Imagen Logo">
            </a>
        </div>
        <div class="info-container">
            Bienvenido/a <?php echo $_SESSION['usuario']; ?>.
            <a class="logout" href="server/cerrar-sesion.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
        </div>
    </nav>

    <h2>Profesor</h2>

    <div class="menu-principal">
        <button id="crearIncidencia" class="crear-incidencia">
            <i class="fa-solid fa-plus fa-2xl"></i>
        </button>
        <button id="listarIncidencias" class="listar-incidencias">
            <i class="fa-solid fa-list fa-2xl"></i>
        </button>
    </div>
</body>
</html>