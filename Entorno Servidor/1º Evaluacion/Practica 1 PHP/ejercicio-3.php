<?php 

$equipo = $_SERVER['SERVER_NAME'];
$puerto = $_SERVER['SERVER_PORT'];
$directorio = $_SERVER['DOCUMENT_ROOT'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 | Alexandru Kovacs</title>
</head>
<body>
    <p><?php echo "El nombre del equipo servidor sobre el que se ejecuta el script: $equipo"; ?></p>
    <p><?php echo "El puerto del equipo servidor:  $puerto"; ?></p>
    <p><?php echo "El directorio raíz del documento bajo el que se ejecuta el script: $directorio"; ?></p>
</body>
</html>

