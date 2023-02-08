<?php

require_once './entities/Equipo.php';
require_once 'bootstrap.php';

$id = 2;

// Buscar el jugador con el ID indicado
$equipo = $entityManager->find('Equipo', $id);

if (!$equipo) {
    echo 'Equipo no encontrado.';
} else {
    $entityManager->remove($equipo);
    $entityManager->flush();

    echo 'Equipo encontrado';
}