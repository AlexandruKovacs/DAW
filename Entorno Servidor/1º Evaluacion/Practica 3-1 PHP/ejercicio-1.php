<?php

$array = [123, 345, 256, 234, 57 ,61 ,117 ,34 ,976 ,5];
$limite = 100;


for ($i = 0; $i < count($array); $i++) {
    
    if ($array[$i] <= $limite) {

        for ($j = 0; $j < count($array); $j++) {

            if ($array[$i] < $array[$j]) {

                $aux = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $aux;
            }
        }   
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Alexandru Kovacs</title>
</head>
<body>
    <p><?php print_r($array); ?></p>
</body>
</html>