<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies 1 | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Cookies</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <label for="idiomas">Elige un idioma:</label>
        <select name="idiomas" id="idiomas">
            <option value="" selected></option>
            <option value="español">Español</option>
            <option value="inglés">Inglés</option>
            <option value="alemán">Alemán</option>
        </select>

        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php

        if (isset($_POST['enviar'])) {
            setcookie('idioma', $_POST['idiomas'], time() + 3600, "/");
            header("Refresh: 0");
        }

        if (isset($_COOKIE['idioma'])) {
            echo '<p>El idioma es ' . $_COOKIE['idioma'] . '.</p>';
        } else {
            echo '<p>El idioma es español.</p>';
        }

    ?>
    
</body>
</html>