<?php

$cadena = 'Ciclo de Grado Superior de Desarrollo de Aplicaciones Web; Ciclo de Grado Superior de Desarrollo de Aplicaciones Multiplataforma; Ciclo de Grado Medio Sistemas Microinformaticos y Redes';

$arrayCadena = count_chars($cadena, 1);

foreach ($arrayCadena as $caracter => $numeroDeVeces) {
    echo "Letra " , chr($caracter) , " $numeroDeVeces apariciones." . '<br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1-b | Examen</title>
</head>
<body>
    
</body>
</html>