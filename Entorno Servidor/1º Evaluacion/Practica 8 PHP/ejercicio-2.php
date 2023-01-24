<?php

$array1 = [3, 4, 6, 8 ,12];
$array2 = [7, 87, 6, 67, 2];
$array3 = [4, 6, 4, 8, 1];

$arrayUnido = array_merge($array1, $array2, $array3);
$arrayUnido = array_unique($arrayUnido);
$menorElemento = min($arrayUnido);

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
    <p>El menor elemento de los tres arrays es <?php echo $menorElemento; ?> y el array es: <pre><?php print_r($arrayUnido); ?></pre></p>
</body>
</html>