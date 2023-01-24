<?php

$marcaTiempo = date("F j, Y, H:i:s" , mktime(23, 15, 0, 7, 30, 2013));

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
    <p>La marca de tiempo creada y convertida es: <?php echo $marcaTiempo; ?></p>
</body>
</html>