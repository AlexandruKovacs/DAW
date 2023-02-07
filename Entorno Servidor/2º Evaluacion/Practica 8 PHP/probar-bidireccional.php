<?php

require_once 'bootstrap.php';
require_once './entities/EquipoBidireccional.php';
require_once './entities/JugadorBidireccional.php';

$id = 1;
$equipo = $entityManager->find('EquipoBidireccional', $id);

if (!$equipo) {
    echo 'Equipo no encontrado.';
} else {

    echo 'Nombre del equipo: ' . $equipo->getNombre() . '<br>';
    $jugadores = $equipo->getJugadores();
    echo 'Lista de jugadores' . '<br>';

    foreach ($jugadores as $jugador) {
        echo 'Nombre: ' . $jugador->getNombre() . '<br>';
    }
}

?>