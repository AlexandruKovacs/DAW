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
            <a class="refresh" href="menu-admin.php">
                <img src="img/logo.png" alt="Imagen Logo">
            </a>
        </div>
        <div class="info-container">
            Bienvenido/a <?php echo strtoupper($_SESSION['usuario']); ?>.
            <a class="logout" href="server/cerrar-sesion.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
        </div>
    </nav>

    <div class="menu-principal">
        <div class="modificar-boton">
            <a href="modificar-estado.php">
                <button class="modificar-estado">
                    <i class="fa-solid fa-pen-to-square"></i>
                </button>
            </a>
            <p>Modificar estado</p>
        </div>
        <div class="caja-creadas">
            <a href="ver-incidencias-creadas.php">
                <button class="incidencia-creada">
                    <i class="fa-solid fa-folder-plus icono-sobre"></i>
                </button>
            </a>
            <p>Creadas</p>
        </div>

        <div class="caja-proceso">
            <a href="ver-incidencias-proceso.php">
                <button class="incidencia-proceso">
                    <i class="fa-solid fa-clock icono-reloj"></i>
                </button>
            </a>
            <p>En proceso</p>
        </div>

        <div class="caja-terminadas">
            <a href="ver-incidencias-terminadas.php">
                <button class="incidencia-terminada">
                    <i class="fa-solid fa-check icono-check"></i>
                </button>
            </a>
            <p>Terminadas</p>
        </div>
    </div>
</body>
</html>