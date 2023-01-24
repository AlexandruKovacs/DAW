<?php

$mes = 'Enero';
$edad = 16;
$verdadero = true;

if ($verdadero) {
  echo 'Verdadero';
} else {
  echo 'Falso';
}

if($edad >= 18) {
  echo '<h1> Bienvenido </h1>';
} else {
  echo '<h1> No eres mayor de edad </h1>';
}

if($mes == 'Diciembre') {
  echo 'Feliz Navidad';
} else if($mes == 'Enero') {
  echo 'Feliz año nuevo';
} else if($mes == 'Julio') {
  echo 'Feliz Julio';
} else {
  echo 'El mes que pusiste no tiene celebración';
}

?>
