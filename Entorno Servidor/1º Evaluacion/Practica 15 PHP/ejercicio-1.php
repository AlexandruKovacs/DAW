<?php

$usuarioPassword = 'Usuario4 contraseña4';

if(strpos(file_get_contents("ejercicio-1.txt"), $usuarioPassword) !== false) {
    echo $usuarioPassword . ' está en el fichero.';
} else {
    echo $usuarioPassword . ' no está en el fichero.';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Alexandru Kovacs</title>
</head>
<body>
    
</body>
</html>