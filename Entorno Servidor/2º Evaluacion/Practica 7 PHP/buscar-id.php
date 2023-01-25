<?php

require_once('./src/Equipo.php');
require_once('bootstrap.php');

$eq = $entityManager->find('equipo', 2);

echo $eq->getSocios();

$eq->setSocios(40000);

$entityManager->flush();

$eq = $entityManager->find('equipo', 4);

if (!$eq) {
    echo 'Equipo no encontrado';
}

?>