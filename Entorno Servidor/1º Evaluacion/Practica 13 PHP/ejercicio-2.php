<?php

$arrayFechaActual = getDate();

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
    <table border="1">
        <?php  
            foreach($arrayFechaActual as $elemento => $dato) {
                echo '<tr><th>' . $elemento . '</th>';
                echo '<td>' . $dato  . '</td></tr>';
            }
        ?> 
    </table>
</body>
</html>