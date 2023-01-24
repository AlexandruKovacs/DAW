<?php

$categoria1 = array('cod' => 1, 'nombre' => 'Comida');
$categoria2 = array('cod' => 2, 'nombre' => 'Bebida');

$array = array($categoria1, $categoria2);

$JSON = json_encode($array);

echo $JSON;

?>