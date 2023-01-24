<?php  

$variable = "Hola, este es el texto del ejercicio 2.";

$tipoVariable = gettype($variable);

switch ($tipoVariable) {
    case "string":
        $texto = "La variable es de tipo " . $tipoVariable . " y tiene como valor: " . $variable;
        break;
    case "integer":
        $texto = "La variable es de tipo " . $tipoVariable . " y tiene como valor: " . $variable;
        break;
    case "double":
        $texto = "La variable es de tipo " . $tipoVariable . " y tiene como valor: " . $variable;
        break;
    case "float":
        $texto = "La variable es de tipo " . $tipoVariable . " y tiene como valor: " . $variable;
        break;
    case "boolean":
        $texto = "La variable es de tipo " . $tipoVariable . " y tiene como valor: " . $variable;
        break;
    case "array":
        $texto = "La variable es de tipo " . $tipoVariable . " y tiene como valor: " . $variable;
        break;
}

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
    <p><?php echo $texto; ?></p>
</body>
</html>