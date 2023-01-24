<?php

$operacion = "dividir";
$numero1 = 10;
$numero2 = 30;

if ($operacion == "sumar") {
        
    include("sumar.php");

} elseif ($operacion == "restar") {

    include("restar.php");

} elseif ($operacion == "multiplicar") {

    include("multiplicar.php");

} elseif ($operacion == "dividir") {

    include("dividir.php");

} else {
    echo "Introduzca una operación correcta.";
}
?>