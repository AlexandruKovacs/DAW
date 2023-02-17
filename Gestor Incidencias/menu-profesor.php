<?php

session_start();

if (!isset($_SESSION['usuario'])) {

  header("Location: index.html");
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
            <a class="logout" href="server/logout.php">(Cerrar sesión)</a>
        </div>
    </nav>
</body>
</html>