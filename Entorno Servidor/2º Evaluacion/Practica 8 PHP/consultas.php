<?php

require_once 'bootstrap.php';
require_once './entities/Jugador.php';
require_once './entities/Equipo.php';

/** 
 * Con findBy / findOneBy:
 *
 * Jugadores con exactamente 34 años: 
 */

echo 'Jugadores con 34 años:' . '<br>';

$jugadores = $entityManager->getRepository('Jugador')
    ->findBy(['edad' => 34]);

foreach ($jugadores as $jugador) {
    echo 'Nombre del jugador: ' . $jugador->getNombre() . ' ' . $jugador->getApellidos() . '<br>';
}

echo '<br>';

// Equipos de Madrid fundados en 1900.
echo 'Equipos de Madrid fundados en 1900:' . '<br>';

$equipos = $entityManager->getRepository('Equipo')
    ->findBy([
        'fundacion' => 1900,
        'ciudad' => 'Madrid'
    ]);

foreach ($equipos as $equipo) {
    echo 'Nombre del equipo: ' . $equipo->getNombre() . '<br>';
}

echo '<br>';

// Equipo cuyo nombre es 'Real Madrid'
echo 'Equipo cuyo nombre es Real Madrid: ' . '<br>';

$equipo = $entityManager->getRepository('Equipo')
    ->findOneBy(['nombre' => 'Real Madrid']);

echo 'Nombre: ' . $equipo->getNombre() . '<br>';
echo 'Fundacion: ' . $equipo->getFundacion() . '<br>';
echo 'Ciudad: ' . $equipo->getCiudad() . '<br>';