<?php

session_start();

?>

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
    <fieldset class="cajaMenu">
        <legend>Tu menú</legend>
            <div class="menu">
                <h3>Pedido actual:</h3>
                <?php

                    if (isset($_SESSION['plato1'])) {
                        echo '<p>1º plato: ' . $_SESSION['plato1'] . '.</p>';
                        
                        setcookie('plato1', $_SESSION['plato1'], time() + 604800, '/');
                        unset($_SESSION['plato1']);
                    } else {
                        echo '<p>1º plato: No seleccionado.</p>';
                    }

                    if (isset($_SESSION['plato2'])) {
                        echo '<p>2º plato: ' . $_SESSION['plato2'] . '.</p>';
                        
                        setcookie('plato2', $_SESSION['plato2'], time() + 604800, '/');
                        unset($_SESSION['plato2']);
                    } else {
                        echo '<p>2º plato: No seleccionado.</p>';
                    }

                    if (isset($_SESSION['postre'])) {
                        echo '<p>Postre: ' . $_SESSION['postre'] . '.</p>';

                        setcookie('postre', $_SESSION['postre'], time() + 604800, '/');
                        unset($_SESSION['postre']);
                    } else {
                        echo '<p>Postre: No seleccionado.</p>';
                    }

                    echo '<h3>Pedido anterior:</h3>';

                    if (isset($_COOKIE['plato1'])) {
                        echo '<p>1º plato: ' . $_COOKIE['plato1'] . '.</p>';
                    } else {
                        echo '<p>1º plato: No seleccionado.</p>';
                    }
                    
                    if (isset($_COOKIE['plato2'])) {
                        echo '<p>2º plato: ' . $_COOKIE['plato2'] . '.</p>';
                    } else {
                        echo '<p>2º plato: No seleccionado.</p>';
                    }

                    if(isset($_COOKIE['postre'])) {                     
                        echo '<p>Postre: ' . $_COOKIE['postre'] . '.</p>';
                    } else {
                        echo '<p>Postre: No seleccionado.</p>';
                    }
                ?>

                <h2>¡Buen provecho!</h2>
            <button class="boton" onclick="location.href='plato-1.php'">Volver a elegir</button>
        </div>    
    </fieldset>
</body>
</html>