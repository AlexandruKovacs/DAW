<?php

$contenido = file_get_contents('ficheroEjemplo.txt');
echo "Contenido del fichero: $contenido" . '<br>';

$res = file_put_contents('ficheroSalida.txt', 
        'Fichero creado con file_input_contents');
if ($res) {
    echo 'Fichero creado con éxito';
} else {
    echo 'Error al crear el fichero';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura y escritura | Alexandru Kovacs</title>
</head>
<body>
    
</body>
</html>