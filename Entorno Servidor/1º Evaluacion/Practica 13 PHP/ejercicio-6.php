<?php

checkdate(2, 29, 2004) ? $primerCheck = "El 29 de febrero de 2004 existe." : $primerCheck = "El 29 de febrero de 2004 no existe.";
checkdate(2, 29, 2005) ? $segundoCheck = "El 29 de febrero de 2005 existe." : $segundoCheck = "El 29 de febrero de 2005 no existe.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 | Alexandru Kovacs</title>
</head>
<body>
    <p><?php echo $primerCheck; ?></p>
    <p><?php echo $segundoCheck; ?></p>
</body>
</html>