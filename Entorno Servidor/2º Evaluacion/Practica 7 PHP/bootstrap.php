<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array('./src');
$isDevMode = true;

// Configuracion de la base de datos
$dbParams = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'futbol',
    'host' => 'localhost',
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);



?>