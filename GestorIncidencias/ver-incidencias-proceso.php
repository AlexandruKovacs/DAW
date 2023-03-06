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
    <title>En proceso | Incidencias</title>

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
    <?php require('view/banner-admin-view.php'); ?>
    
    <input type="hidden" id="idProfesor" value="<?php echo $_SESSION['idProfesor']; ?>">
    <input type="hidden" id="estado" value="En proceso">

    <main class="main-incidencia">
        <h2 id="tituloPagina">Incidencias en proceso</h2>
        <div id="vacio">
            <img src="img/no-data.png" alt="No data" class="no-data">
            <p>No hay ninguna incidencia en proceso.</p>
        </div>
        <table id="tablaIncidenciasEstado">
            <thead>
            <tr>
                <th>Aula</th>
                <th>Grupo</th>
                <th>Tipo de incidencia</th>
                <th>Descripción</th>
                <th>Fecha de creación</th>
                <th colspan="2">Añadir comentarios</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </main>
    <div class="navegacion">
         <a href="menu-admin.php"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    <script src="js/consts.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/ver-incidencias-estado.js"></script>
</body>
</html>