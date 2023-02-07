<?php

require_once 'bootstrap.php';
require_once './entities/Equipo.php';
require_once './entities/Jugador.php';

$id = 1;

// Buscar el jugador con el ID indicado
$jugador = $entityManager->find('Jugador', $id);

if (!$jugador) {
    echo 'Jugador no encontrado';
} else {

    echo 'Nombre del jugador: ' . $jugador->getNombre() . '<br>';
    $equipo = $jugador->getEquipo();
    echo 'Nombre del equipo: ' . $equipo->getNombre() . '<br>';

}

?>