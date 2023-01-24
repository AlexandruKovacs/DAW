<?php 

$cadena = "Juventud , divino tesoro , ¡ya te vas para no volver ! Cuando quiero llorar no lloro ... y a veces lloro sin querer.";

// Apartado A ***

$cadenaFinal = []; // ARRAY PARA GUARDAR LA CADENA FINAL

for ($i = 0; $i < strlen($cadena); $i++) { // BUCLE FOR PARA RECORRER LA CADENA
    
    // IF QUE NOS COMPARA EL CARACTER ATCUAL CON LAS VOCALES, 
    // SI ES UNA VOCAL LA TRANSOFRMA A MAYÚSCULAS Y LA GUARDA EN EL ARRAY CADENA FINAL
    if ($cadena[$i] == 'a' || $cadena[$i] == 'e' || $cadena[$i] == 'i' ||
        $cadena[$i] == 'o' || $cadena[$i] == 'u') {
            
            $vocal = strtoupper($cadena[$i]);
            array_push($cadenaFinal, $vocal);
    
    // SI NO ES UNA VOCAL ENTONCES NO LO TRANSORMA A MAYÚSCULAS PERO LO GUARDA IGUALMENTE EN EL ARRAY
    } else {

            $consonante = $cadena[$i];
            array_push($cadenaFinal, $consonante);
    }
}

// UNIMOS TODOS LOS CARACTERES PARA FORMAR DE NUEVO UN CADENA (ANTES ERA UN ARRAY)
$cadenaFinal = implode($cadenaFinal);

// Apartado B ***

$cadena = strtolower($cadena); // EL PRIMER PASO ES PASAR TODA LA CADENA A MINÚSCULAS
$palabras = explode(" ", $cadena); // DESPUÉS SEPARAMOS LA CADENA EN PALABRAS (POR ESPACIOS EN BLANCO)
$palabrasLetras = [];

$palabrasLargas = 0; // CONTADOR DE PALABRAS DE MÁS DE 4 LETRAS

for ($i = 0; $i < count($palabras); $i++){ // BUCLE FOR PARA RECORRER EL ARRAY DE PALABRAS SEPARADAS POR ESPACIOS
    if (strlen($palabras[$i]) > 4) { // IF QUE COMPRUEBA QUE LA LONGITUD DE LA PALABRA ACTUAL ES MAYOR A 4 LETRAS
        $palabrasLetras[] = $palabras[$i];
        $palabrasLargas++; // SUMAMOS UNA PALABRA MAYOR DE 4 LETRAS
    }
}

// Apartado C ***
$cadena = strtolower($cadena); // EL PRIMER PASO ES PASAR TODA LA CADENA A MINÚSCULAS
$palabras = explode(" ", $cadena); // DESPUÉS SEPARAMOS LA CADENA EN PALABRAS (POR ESPACIOS EN BLANCO)
$palabrasRepetida = 0; // MARCADOR DE QUE SE HA REPETIDO UNA PALABRA
$repetidas = []; // ARRAY QUE ALMACENA LAS PALABRAS REPETIDAS


for ($i = 0; $i < count($palabras); $i++) { // BUCLE FOR PARA RECORRER EL ARRAY DE PALABRAS SEPARADAS POR ESPACIOS

    $palabrasRepetidas = 1; // EL MARCADOR SE CAMBIA A 1

    for ($j = $i+1; $j < count($palabras); $j++) { // BUCLE FOR PARA RECORRER EL ARRAY DE PALABRAS SEPARADAS POR ESPACIOS

        if ($palabras[$i] === $palabras[$j]) { // IF QUE COMPRUEBA QUE LA PALABRA DE CADA FOR ES IGUAL A LA OTRA
            $palabrasRepetidas++; // SI LO ES SUMAMOS UNA PALABRA REPETIDA
        }

    }

    if ($palabrasRepetidas > 1) { // IF QUE COMPRUEBA QUE SI LA PALABRA SE REPITE UNA O MÁS VECES
        $repetidas[] = $palabras[$i]; // SI SE REPITE LA GUARDA EN UN ARRAY
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Examen</title>
</head>
<body>
    <h3>Ejercicio 1</h3>
    <p>Ejercicio 1-a: <?php echo $cadenaFinal; ?></p>
    <p>Ejercicio 1-b: Hay <?php echo $palabrasLargas; ?> palabras de más de 4 letras. Y las palabras son <pre><?php print_r($palabrasLetras); ?></pre></p>
    <p>Ejercicio 1-c: Hay <?php echo count($repetidas);?> palabra/as repetidas. Las palabras repetidas son <pre><?php print_r($repetidas); ?></pre></p>
    <p></p>
</body>
</html>