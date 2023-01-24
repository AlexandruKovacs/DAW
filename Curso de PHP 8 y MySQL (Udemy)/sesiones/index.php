<?php
session_start();

$_SESSION['nombre'] = 'Carlos';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h1>Página de inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la página 2</a>
</body>
</html>