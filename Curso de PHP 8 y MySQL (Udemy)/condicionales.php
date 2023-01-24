<?php

//if (condicion) {
  //Intrucciones
//}

/*OPERADORES DE COMPARACIÓN

== Igualdad
< Menor que
> Myaor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación

*/

/*OPERADORES LÓGICOS

&& - Evalua que se cumplan las 2 condiciones
||, OR - Evalua que se cumpla al menos una condición
xor - Evalua que se cumpla una y sol una condición

*/

$edad = 18;
$nombre = 'Alex';

if ($edad >= 18 && $nombre == 'Alex') {
  echo '<h1> Bienvenido </h1>';
}

if ($edad < 18) {
  echo '<h1> Eres menor de edad y/o no te llamas Alex</h1>';
}

?>
