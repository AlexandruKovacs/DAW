<?php

require_once('./src/Equipo.php');
require_once('bootstrap.php');

echo '<h3>Modificar socios</h3>';

$eq = $entityManager->find('equipo', 2);
echo 'El numero de socios anterior es: ' . $eq->getSocios() . '</p>';

$eq->setSocios(100000);
echo '<p>El numero de socios modificado es: ' . $eq->getSocios() . '</p>';

$entityManager->flush();

echo '<h3>Buscar equipo</h3>';

$id = 2;
$eq = $entityManager->find('equipo', $id);

if (!$eq) {
    echo '<p>Equipo con id ' . $id . ' no encontrado</p>';
} else {
    echo '<p>Equipo con id ' . $id . ' encontrado.</p>';
}

?>