<?php

$numeros = [
    602, 225, 685, 421, 368, 629, 409, 865, 823, 960,
    919, 313, 675, 250, 577, 650, 750, 591, 694, 610,
    922, 750, 624, 839, 106, 750, 630, 849, 128, 750,
    220, 461, 532, 750, 758];

$total = count($numeros);
$existe = false;

// $repetidos = [];

// Se repiten el 750 (posición 16 y 25) y el 872 (posición 21 y 33)
// Sólo se muestran las posiciones 16 y 21.

// for ($i = 0; $i < count($numeros); $i++) {
//     for ($j = $i; $j < count($numeros); $j++) {
//         if ($numeros[$i] == $numeros[$j] && $i != $j) {
            
//             $repetidos[] = $numeros[$i];
//             break;
//         }
//     }
// }

// foreach ($repetidos as $claveRep => $repetido) {
//     foreach($numeros as $claveNum => $numero) {
//         if ($repetidos[$claveRep] == $numeros[$claveNum]) {
//             unset($numeros[$claveNum]);
//         }
//     }
// }


// EJERCICIO PROFE
// Recorro todo el array
for ($i = 0; $i < $total; $i++) {
    // Compruebo si existe la posición 
    if(isset($numeros[$i])) {
        $j = $i + 1;
        // Compruebo si he llegado al final
        if ($j < $total) {
            // Compruebo todas las posiciones siguientes
            for ($j; $j < $total; $j++) {
                // Si existe la posición
                if(isset($numeros[$j])) {
                    // Compruebo el valor de los elementos
                    if($numeros[$j] == $numeros[$i]) {
                        unset($numeros[$j]);
                        $existe = true;
                    }
                }
            }
            if ($existe) {
                unset($numeros[$i]);
            }
        }
    }
}

// for ($i = 0; $i < $total; $i++) {
//     if (isset($numeros[$i])) {
//         echo $numeros[$i] . " ";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | Alexandru Kovacs</title>
</head>
<body>
    <p><pre><?php print_r($numeros); ?></pre></p>
</body>
</html>