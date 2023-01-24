<?php

$fichero = fopen('matriz.txt', 'r');

if ($fichero === false) {
    echo 'No se encuentra el fichero o no se pudo leer' . '<br>';
} else {
    while (!feof($fichero)) {
        $num = fscanf($fichero, '%d %d %d %d');
        echo "$num[0] $num[1] $num[2] $num[3] " . '<br>';
    }
}

echo '<br>';

rewind($fichero);
while (!feof($fichero)) {
    $num = fscanf($fichero, '%d %d %d %d', $num1, $num2, $num3, $num4);
    echo "$num1 $num2 $num3 $num4" . '<br>';
}

fclose($fichero);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz | Alexandru Kovacs</title>
</head>
<body>
    
</body>
</html>