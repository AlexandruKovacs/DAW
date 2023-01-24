<?php
$dia = date("D");

switch ($dia) {
    case "Mon":
    case "Tue":
    case "Wed":
    case "Thu":
    case "Fri":
        $texto = "un dia de diario.";
        break;  
    default: 
        $texto = "fin de semana.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días switch</title>
</head>
<body>
    <p>Hoy es <b><?php echo $texto; ?></b></p>
</body>
</html>