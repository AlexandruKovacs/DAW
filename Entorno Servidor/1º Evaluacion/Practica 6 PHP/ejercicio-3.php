<?php

$cadenaInicial = "esTe es el Texto a Cambiar las Vocales a mayusculas y las consonantes a minusculas.";
$cadenaFinal = [];

for ($i = 0; $i < strlen($cadenaInicial); $i++) {
    
    if ($cadenaInicial[$i] == 'a' || $cadenaInicial[$i] == 'e' || $cadenaInicial[$i] == 'i' ||
        $cadenaInicial[$i] == 'o' || $cadenaInicial[$i] == 'u') {
            
            $vocal = strtoupper($cadenaInicial[$i]);
            array_push($cadenaFinal, $vocal);

        } else {
            $consonante = strtolower($cadenaInicial[$i]);
            array_push($cadenaFinal, $consonante);

        }
}

$cadenaFinal = implode($cadenaFinal);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 | Alexnadru Kovacs</title>
</head>
<body>
    <p>La cadena cambiada es: <?php echo $cadenaFinal; ?></p>
</body>
</html>