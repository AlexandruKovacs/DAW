<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Ruta donde guardaremos los documentod creados
$paths = array("./entities");
$isDevMode = false;
$useSimpleAnnotationReader = false;

// Conection Configuration, 'tienda' es la base de datos
$dbParams = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'futbol'
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

?>