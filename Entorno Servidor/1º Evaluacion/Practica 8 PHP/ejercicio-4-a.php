<?php  

$arrayNumeros = [];
$numerosMayores = [];
$cantidadNumeros = 10;
$numero = 20;

for ($i = 0; $i < $cantidadNumeros; $i++) {
    array_push($arrayNumeros, rand(1,100));
}

foreach ($arrayNumeros as $num) {
    if ($num > $numero) {
        array_push($numerosMayores, $num);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4-a | Alexandru Kovacs</title>
</head>
<body>
    <p>El array es: <pre><?php print_r($arrayNumeros); ?></pre></p>
    <p>Los números mayores que <?php echo $numero; ?> son: <pre><?php print_r($numerosMayores); ?></pre></p>
</body>
</html>