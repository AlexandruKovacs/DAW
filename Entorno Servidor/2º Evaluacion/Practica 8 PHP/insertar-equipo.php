<?php

require_once './entities/Equipo.php';
require_once 'bootstrap.php';

$nuevo = new Equipo();

$nuevo->setNombre('Atletico de Madrid');
$nuevo->setFundacion(1900);
$nuevo->setSocios(50000);
$nuevo->setCiudad('Madrid');

$entityManager->persist($nuevo);
$entityManager->flush();

echo 'Equipo insertado ' . $nuevo->getId();


?>