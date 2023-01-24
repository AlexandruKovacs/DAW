<?php

$edad = 18;

//FORMA TERNARIA
$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad';


//FORMA LARGA
if (isset($edad)) {
  $edad = $edad;
} else {
  $edad = 'El usuario no estableció su edad';
}

echo 'Edad: ' . $edad;


?>
