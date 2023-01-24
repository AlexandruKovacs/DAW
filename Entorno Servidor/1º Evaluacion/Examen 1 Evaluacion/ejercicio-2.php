<?php

echo '<h3>Ejercicio 2</h3>';

// Aparado A ***
$array1 = [1, 2, 2, 3, 4, 5, 5, 5, 6, 7, 8, 8, 9, 10];
$array2 = [3, 4, 5, 5, 5, 8, 8, 8];
$arrayAmbos = [];

// FOR EACH QUE RECORRE EL PRIMER ARRAY
foreach ($array1 as $clave => $valor){

    // IF QUE COMPRUEBA SI EL CADA VALOR DEL PRIMER ARRAY ESTÁ EN EL SEGUNDO
    if (in_array($valor, $array2)) {
        // SI ESTÁ LO GUARDA EN UN ARRAY CON LOS NÚMEROS QUE ESTÁN EN AMBOS ARRAYS
        $arrayAmbos[] = $valor;
    }

}

echo '<p>Ejercicio 2-a: Los números que están en ambos arrays son: <pre>';
// LOS MOSTRAMOS SIN REPETIDOS
print_r(array_unique($arrayAmbos));
echo '</pre></p>';


// Apartado B ***
echo '<p>Ejercicio 2-b: </p>';

// BUCLE FOR EACH QUE RECORRE EL ARRAY QUE GENERA ARRAY_COUNT_VALUES, 
// EL CUAL DEVUELVE TODOS LOS ELEMENTOS Y EL NÚMERO DE VECES QUE SE REPITE
foreach(array_count_values($array1) as $clave => $valor) {
    // SI SE REPITE MÁS DE UNA VEZ SIGNIFICA QUE ESTÁ REPETIDO 
    if ($valor > 1){

        // MOSTRAMOS QUE ESTÁ REPETIDO Y CUANTAS VECES
        echo '<p>El número ' . $clave . ' se repite ' . $valor . ' veces en el primer array.' . '</p>';
    }
}

// BUCLE FOR EACH QUE RECORRE EL ARRAY QUE GENERA ARRAY_COUNT_VALUES, 
// EL CUAL DEVUELVE TODOS LOS ELEMENTOS Y EL NÚMERO DE VECES QUE SE REPITE
foreach (array_count_values($array2) as $clave => $valor) {

    // SI SE REPITE MÁS DE UNA VEZ Y ADEMÁS ESTÁ EN EL ARRAY 1 LO MOSTRAMOS
    if (($valor > 1) && (in_array($valor, $array1))) {

        //MOSTRAMOS EL NÚMERO QUE SE REPITE, ESTÁ EN EL ARRAY 2 Y CUANTAS VECES SE REPITE EN EL ARRAY DOS
        echo '<p>El número ' . $clave . ' está en el array 1 y ' . ' y se repite ' . $valor . ' veces.' . '</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 | Examen</title>
</head>
<body>

</body>
</html>