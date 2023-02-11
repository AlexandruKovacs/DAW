<?php

require_once 'bootstrap.php';
require_once './src/Articulos.php';
require_once './src/Proveedor.php';

$selectArticulos = $entityManager->createQuery('SELECT art FROM Articulos art');
$articulos = $selectArticulos->getResult();

echo '<option value="">Selecciona un artículo</option>';
foreach ($articulos as $articulo) {
    echo '<option value="' . $articulo->getId() . '">' . $articulo->getNombre() . '</option>';
}