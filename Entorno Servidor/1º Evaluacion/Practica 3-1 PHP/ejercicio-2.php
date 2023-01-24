<?php

$numeroAlumnos = 35;
$aprobados = 0; 
$suspensos = 0; 
$suma = 0;
$auxMax = 0;
$auxMin = 10;
$notaMax = 0;
$notaMin = 0;

for ($i = 0; $i < $numeroAlumnos; $i++) {
    
    $notas[] = mt_rand(10, 100) / 10;

    if ($notas[$i] >= 5) {
        $aprobados++;
    } else {
        $suspensos++;
    }
    
    if ($notas[$i] >= $auxMax) {
        $notaMax = $notas[$i];
        $auxMax = $notas[$i];
    }

    if ($notas[$i] < $auxMin) {
        $notaMin = $notas[$i];
        $auxMin = $notas[$i];
    }
}
$suma += $notas[$i];
$media = $suma / $numeroAlumnos;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 | Alexandru Kovacs</title>
</head>
<body>
    <p>La media de las notas de los alumnos es: <?php echo number_format($media, 2); ?></p>
    <p>La nota máxima es: <?php echo $notaMax; ?></p>
    <p>La nota mínima es: <?php echo $notaMin; ?></p>
    <p>Hay <?php echo $aprobados; ?> alumnos que han superado la asignatura.</p>
    <p>Hay <?php echo $suspensos; ?> alumnos que NO han superado la asignatura.</p>
</body>
</html>