<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Alexandru Kovacs</title>
</head>
<body>
    <p><?php 

    $altura = 5;
    
    for ($i=0; $i < $altura; $i++) { 

        for ($j=0; $j < $i + 1; $j++) { 
            echo "*";
        }
        
        echo "<br>";
    }
    
    ?></p>
</body>
</html>