<?php 

$tipoFigura = "pentágono";

if ($tipoFigura == "cuadrado") {
    
    $texto = "Para hallar el perímetro de un cuadrado hay que conocer la longitud de uno de sus lados y multiplicarla por 4.";

} elseif ($tipoFigura == "rectángulo") {
    
    $texto = "El perímetro del rectángulo es igual a la suma de las longitudes de sus cuatro lados.";

} elseif ($tipoFigura == "triángulo") {
    
    $texto = "El perímetro de un triángulo es igual a la suma de sus tres lados.";

} elseif ($tipoFigura == "pentágono") {
    
    $texto = "El perímetro del pentágono es igual a la suma de las longitudes de sus cinco lados.";

} else {
    $texto = "Introduce una figura correcta.";
}

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
    <p><?php echo $texto; ?></p>
</body>
</html>