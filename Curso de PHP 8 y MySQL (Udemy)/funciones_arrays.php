<?php

// $amigo = array('telefono' => 123456789, 'edad' => 20, 'pais' => 'España');
//
// extract($amigo);
// echo $edad;


$semana = array(
  'Lunes', 'Martes', 'Miercoles',
  'Jueves', 'Viernes', 'Sabado' , 'Domingo'
);

// $ultimoDia = array_pop($semana);
//
// foreach ($semana as $dia) {
//   echo $dia . '<br />';
// }
//
// echo $ultimoDia;

// echo join('<br />', $semana);

// echo count($semana);

// sort($semana);
// echo join(', ', $semana);

$semanaReverse = array_reverse($semana);
echo join(', ', $semanaReverse);



?>
