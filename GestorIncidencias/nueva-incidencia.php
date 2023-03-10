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
    <title>Nueva Incidencia | Incidencias</title>

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

    <main class="main-crear-incidencia">
        <div class="form-container">
            <h2>Nueva incidencia</h2>
            <div id="mensaje"></div>

            <form id="formIncidencia" class="form-incidencia">

                <div>
                    <label for="tipo">Tipo de incidencia</label>
                    <select name="tipo" id="tipo">
                        <option value="">Selecciona un tipo</option>
                    </select>
                </div>

                <div>
                    <label for="aula">Aula o lugar</label>
                    <input type="text" name="aula" id="aula" list="aulas">
                    <datalist id="aulas">
                    </datalist>
                </div>

                <div>
                    <label for="grupo">Grupo</label>
                    <input type="text" name="grupo" id="grupo" list="grupos">
                    <datalist id="grupos">
                    </datalist>
                </div>

                <div>
                    <label for="fechs">Fecha de la incidencia</label>
                    <input type="date" name="fecha" id="fecha">
                </div>

                <div>
                    <label for="descripcion">Breve descripci??n</label>
                    <textarea name="descripcion" id="descripcion"></textarea>
                </div>

                <div>
                    <a class="atras" id="atras" href="menu-profesor.php">Atr??s</a>
                </div>
                
                <div>
                    <button class="registrar" id="registrar">Crear incidencia</button>
                </div>

            </form>
        </div>
    </main>
    <script src="js/consts.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/nueva-incidencia.js"></script>
    <script src="js/main.js"></script>
</body>
</html>