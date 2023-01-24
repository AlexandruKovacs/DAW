<?php

//Array con todos los dias de la semana
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$semana[7] = 'FalconMasters';

echo $semana[7] . '<br/>';
echo $semana[0] . '<br/>';
echo $semana[1] . '<br/>';
echo $semana[2] . '<br/>';
echo $semana[3] . '<br/>';
echo $semana[4] . '<br/>';
echo $semana[5] . '<br/>';
echo $semana[6] . '<br/>';

$arreglo = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

// En los arrays podemos guardar cualquier tipo de dato, incluso podemos guardar un array dentro de otro
$arreglo = array('cadenas de texto', 123, array('asd',123), true);

?>
