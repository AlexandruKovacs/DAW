<?php

require_once 'bootstrap.php';
require_once './entities/Equipo.php';
require_once './entities/Jugador.php';

$id = 1;

// Buscar el jugador con el ID indicado
$jugador = $entityManager->find('jugador', $id);

if (!$jugador) {
    echo 'Jugador no encontrado';
} else {

    echo 'Nombre y apellidos del jugador: ' . $jugador->getNombre() . ' ' . $jugador->getApellidos() . '<br>';
    $equipo = $jugador->getIdEquipo();
    echo 'Nombre del equipo: ' . $equipo->getNombre() . '<br>';

}

?>