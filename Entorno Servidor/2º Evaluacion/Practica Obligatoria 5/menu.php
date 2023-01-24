<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú | Alexandru Kovacs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <fieldset>
        <legend>Tu menú</legend>
            <div class="menu">
                <?php
                    
                    if (isset($_COOKIE['plato1'])) {
                        echo '<p>1º plato: ' . $_COOKIE['plato1'] . '.</p>';
                        
                        unset($_COOKIE['plato1']);
                        setcookie('plato1', '', time() - 3600, '/');
                    } else {
                        echo '<p>1º plato: No seleccionado.</p>';
                    }

                    if (isset($_COOKIE['plato2'])) {
                        echo '<p>2º plato: ' . $_COOKIE['plato2'] . '.</p>';

                        unset($_COOKIE['plato2']);
                        setcookie('plato2', '', time() - 3600, '/');
                    } else {
                        echo '<p>2º plato: No seleccionado.</p>';
                    }

                    if (isset($_COOKIE['postre'])) {
                        echo '<p>Postre: ' . $_COOKIE['postre'] . '.</p>';

                        unset($_COOKIE['postre']);
                        setcookie('postre', '', time() - 3600, '/');
                    } else {
                        echo '<p>Postre: No seleccionado.</p>';
                    }

                    if (isset($_COOKIE['visitas'])) {
                        if ($_COOKIE['visitas'] == 1) {
                            echo '<p>Has cambiado de página ' . $_COOKIE['visitas'] . ' vez.</p>';
                        } else {
                            echo '<p>Has cambiado de página ' . $_COOKIE['visitas'] . ' veces.</p>';
                        }

                        unset($_COOKIE['visitas']);
                        setcookie('visitas', '', time() - 3600, '/');
                    } else {
                        echo '<p>No has cambiado de página ninguna vez.</p>';
                    }
                ?>

                <h3>¡Buen provecho!</h3>
            <button class="boton" onclick="location.href='plato-1.php'">Volver a elegir</button>
        </div>    
    </fieldset>
</body>
</html>