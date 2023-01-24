<?php

$array = [123, 345, 256, 234, 57 ,61 ,117 ,34 ,976 ,5];
$limite = 100;

do {
    $seguir = 0;

    for ($i = 0; $i <count($array); $i++) {

        $j = $i + 1;

        if ($array[$i] <= $limite) {

            if ($i < (count($array)-1)) {

                if ($array[$i]>$array[$j]) {
                    $aux1 = $array[$i];
                    $aux2 = $array[$j];
                    $array[$i] = $aux2;
                    $array[$j] = $aux1;
                    $seguir = 1;
                }
            }
        } else unset($array[$i]);
    }
}while ($seguir);

echo "<br> Array ordenado <br>"


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