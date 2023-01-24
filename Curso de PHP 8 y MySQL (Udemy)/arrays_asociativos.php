<?php

$alex = array('telefono' => '123456789', 'edad' => 22, 'apellido' => 'Kovacs', 'pais' => 'Rumanía');

$alex['telefono'] = '111111111';

echo 'El teléfono de Alex es: ' . $alex['telefono'] . '<br>';
echo $alex['edad'] . '<br>';
echo $alex['apellido'] . '<br>';
echo $alex['pais'] . '<br>';


?>
