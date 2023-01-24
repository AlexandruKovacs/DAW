<?php

$fichero = fopen("ficheroEjemplo.txt", "r");

if ($fichero === false) {
    echo "No se encuentra ficheroEjemplo.txt" . "<br>";
} else {
    echo "ficheroEjemplo.txt se abrió con éxito" . "<br>";
}

$fichero = fopen("ficheroNoExiste.txt", "r");
if ($fichero === false) {
    echo "No se encuentra ficheroNoExiste.txt" . "<br>";
} else {
    echo "ficheroNoExiste.txt se abrió con éxito" . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar | Alexandru Kovacs</title>
</head>
<body>
    
</body>
</html>