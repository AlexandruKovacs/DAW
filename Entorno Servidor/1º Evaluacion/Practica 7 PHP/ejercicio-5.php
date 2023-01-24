<?php

$alumnos = [
   'Alex' => [
        'BBDD' => 5,
        'Programación' => 8,
        'SI' => 7,
        'LM' => 8,
        'ED' => 9,
        'FOL' => 6
   ],
    'Pepe' => [
        'BBDD' => 6,
        'Programación' => 7,
        'SI' => 7,
        'LM' => 8,
        'ED' => 6,
        'FOL' => 5
    ],
   'Pepa' => [
        'BBDD' => 8,
        'Programación' => 9,
        'SI' => 10,
        'LM' => 5,
        'ED' => 6,
        'FOL' => 9
   ]
];

$nombreAlumno = "Pepe";
$nombreModulo = "LM";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 | Alexandru Kovacs</title>
</head>
<body>
    <?php 
        if (isset($alumnos[$nombreAlumno])) {
            
            if ($nombreModulo == "TODOS") {
                foreach($alumnos[$nombreAlumno] as $clave => $valor) {
                    echo "La nota del alumno/a " . $nombreAlumno . " del módulo " . $clave . " es ". $valor . ".<br>";
                }
            } else {
                echo "La nota del alumno/a " . $nombreAlumno . " del módulo " . $nombreModulo . " es: " . $alumnos[$nombreAlumno][$nombreModulo];
            }
        }
    ?>
</body>
</html>