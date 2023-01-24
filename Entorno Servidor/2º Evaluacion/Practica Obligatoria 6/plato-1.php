<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plato 1 | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="img/php.png">
</head>
<body>
    <div class="contenedor">
        <fieldset>
            <legend>Plato 1</legend>
                <form method="POST" action="plato-1.php">
                <label for="platoUno">Selecciona el 1º plato</label>
                <select name="platoUno" id="platoUno">
                    <option value="No seleccionado">No seleccionado</option>
                    <option value="Patatas fritas">Patatas fritas</option>
                    <option value="Lentejas">Lentejas</option>
                    <option value="Macarrones">Macarrones</option>
                </select>

                <input type="submit" name="enviarPlatoUno" value="Seleccionar">
            </form>
            <?php

                if (isset($_POST['enviarPlatoUno']) && ($_POST['platoUno'] !== "")) {
                    $_SESSION['plato1'] = $_POST['platoUno'];

                    header("Refresh: 0");
                }

                if (isset($_SESSION['plato1'])) {
                    echo '<p>1º plato: ' . $_SESSION['plato1'] . '.</p>';
                } else {
                    echo '<p>1º plato: No seleccionado.</p>';
                }

                if (isset($_SESSION['plato2'])) {
                    echo '<p>2º plato: ' . $_SESSION['plato2'] . '.</p>';
                } else {
                    echo '<p>2º plato: No seleccionado.</p>';
                }

                if (isset($_SESSION['postre'])) {
                    echo '<p>Postre: ' . $_SESSION['postre'] . '.</p>';
                } else {
                    echo '<p>Postre: No seleccionado.</p>';
                }

            ?>
            <div class="botones">
                <button class="boton" onclick="location.href='plato-2.php'">Elegir 2º plato</button>
                <button class="boton" onclick="location.href='postre.php'">Elegir postre</button>
                <button class="boton" onclick="location.href='menu.php'">Crear pedido <i class="fa-solid fa-utensils"></i></button>
            </div>
        </fieldset>
    </div>
</body>
</html>