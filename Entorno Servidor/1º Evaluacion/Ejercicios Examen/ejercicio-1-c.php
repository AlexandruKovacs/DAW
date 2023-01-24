<?php

$cadena = 'Ciclo de Grado Superior de Desarrollo de Aplicaciones Web; Ciclo de Grado Superior de Desarrollo de Aplicaciones Multiplataforma; Ciclo de Grado Medio Sistemas Microinformaticos y Redes';
$vocal = 0;
$consonante = 0;

$cadena = strtolower($cadena);

for ($i = 0; $i < strlen($cadena); $i++) {
    if ($cadena[$i] == 'a' || $cadena[$i] == 'e' || $cadena[$i] == 'i' || $cadena[$i] == 'o' || $cadena[$i] == 'u') {
        $vocal++;
    } else if ($cadena[$i] >= 'a' && $cadena[$i] <= 'z') {
        $consonante++;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1-c | Examen</title>
</head>
<body>
    <p>Hay <?php echo $vocal; ?> vocales.</p>
    <p>Hay <?php echo $consonante; ?> consonantes.</p>
</body>
</html>