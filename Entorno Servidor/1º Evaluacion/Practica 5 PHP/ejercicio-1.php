<?php

$cadena = "En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor..";

// a
$numeroDeCaracteres = strlen($cadena);

// b
$textoResultante = strstr($cadena, "hidalgo");

// c
$posicionCadena = strpos($cadena, "Mancha");

// d
$cadenaPosicion = substr($cadena, 20);

// e
$cadenaCambio = str_replace("de", "IES PIO BAROJA", $cadenaPosicion);

// f
$cadenaDe = substr_count($cadena, "de");

// g
$cadenaSinEspacios = chop($cadena);

// h
$cadenaConL = str_pad($cadena, 220, "L");

// i
$cadenaMayus = strtoupper($cadena);

// j
$arrayLineas = explode(",", $cadena);

// k
$ascii = chr(165);

// l
$matriz = count_chars($cadena, 1);
foreach ($matriz as $clave => $valor) {
   $caracterRepetido = max(array_keys($matriz));
   $numeroDeVeces = array_search(max($matriz),$matriz);
}

$caracterRepetidoMasVeces = "El '" . $caracterRepetido . "' y aparece " . $numeroDeVeces . " veces.";

// m
$noUtilizados = count_chars($cadena, 4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Alexandru Kovacs</title>
</head>
<style>
   table {
      border: 1px solid black;
      border-spacing: 0;
   }
   td, th {
      border: 1px solid black;
      padding: 10px;
      max-width: 500px;
   }
</style>
<body>
    <table>
        <tr>
           <th>Número de caracteres:</th>
           <td><?php echo $numeroDeCaracteres; ?></td> 
        </tr>
        <tr>
           <th>El texto resultante es:</th>
           <td><?php echo $textoResultante; ?></td>
        </tr>
        <tr>
           <th>La posición de la cadena 'Mancha' es:</th>
           <td><?php echo $posicionCadena; ?></td>
        </tr>
        <tr>
           <th>El texto a partir de la posición 20 es:</th>
           <td><?php echo $cadenaPosicion; ?></td>
        </tr>
        <tr>
           <th>El texto cambiado es:</th>
           <td><?php echo $cadenaCambio; ?></td>
        </tr>
        <tr>
           <th>El número total de 'des' es:</th>
           <td><?php echo $cadenaDe; ?></td>
        </tr>
        <tr>
           <th>El texto después de aplicar la función chop() es:</th>
           <td><?php echo $cadenaSinEspacios; ?></td>
        </tr>
        <tr>
           <th>El texto resultante de añadirle el carácter "L" es:</th>
           <td><?php echo $cadenaConL; ?></td>
        </tr>
        <tr>
           <th>La cadena en maýusculas es:</th>
           <td><?php echo $cadenaMayus; ?></td>
        </tr>
        <tr>
           <th>El texto original dividido en trozos y separado por "," es:</th>
           <td><?php print_r($arrayLineas); ?></td>
        </tr>
        <tr>
           <th>El carácter asociado al código ASCII 165 es:</th>
           <td><?php echo $ascii; ?></td>
        </tr>
        <tr>
           <th>El carácter más repetido y cuantas veces aparece es:</th>
           <td><?php echo $caracterRepetidoMasVeces; ?></td>
        </tr>
        <tr>
           <th>Los caracteres que no aparecen son:</th>
           <td><?php echo $noUtilizados; ?></td>
        </tr>
    </table>
</body>
</html>