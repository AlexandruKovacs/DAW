<?php

require_once 'bootstrap.php';
require_once './entities/Jugador.php';
require_once './entities/Equipo.php';

// Todos los jugadores, todos los datos
$query = $entityManager->createQuery('SELECT j FROM Jugador j');
$jugadores = $query->getResult();

echo 'Nombre y apellidos de todos los jugadores: ' . '<br>';
foreach ($jugadores as $jugador) {
    echo $jugador->getId() . '. ' . $jugador->getNombre() . ' ' . $jugador->getApellidos() . '<br>';
}

echo '<br>';

// Contar los jugadores mayores de 30 años
$queryContar = $entityManager->createQuery('
    SELECT COUNT(j.id) AS num
    FROM jugador j
    WHERE j.edad > 30
');

$numJugadores = $queryContar->getSingleScalarResult();
echo 'Jugadores mayores de 30 años: ' . $numJugadores;