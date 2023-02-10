<?php

require_once 'bootstrap.php';
require_once './entities/ProveedorBidireccional.php';
require_once './entities/ArticulosBidireccional.php';

$cantidad = $_GET['cantidad'];

if ($cantidad == 'baja') {
    $minCantidad = 0;
    $maxCantidad = 25;
} elseif ($cantidad == 'media') {
    $minCantidad = 50;
    $maxCantidad = 100;
} elseif ($cantidad == 'alta') {
    $minCantidad = 100;
    $maxCantidad = 9999;
}

if ($cantidad != '') {

    $selectArticulos = $entityManager->createQuery("
    SELECT art
    FROM ArticulosBidireccional art
    WHERE art.cantidad BETWEEN $minCantidad AND $maxCantidad
    ");
    
    $articulos = $selectArticulos->getResult();

} else {

    $selectArticulos = $entityManager->createQuery('SELECT art FROM ArticulosBidireccional art');
    $articulos = $selectArticulos->getResult();
}

foreach ($articulos as $articulo) {
    $proveedor = $articulo->getProveedor();

    echo '<tr>';
    echo '<td>' . $articulo->getId(). '</td>';
    echo '<td>' . $articulo->getNombre(). '</td>';
    echo '<td>' . $articulo->getDescripcion(). '</td>';
    echo '<td>' . $articulo->getPrecio() . '€</td>';
    echo '<td>' . $articulo->getCantidad() . '</td>';
    echo '<td>' . $proveedor->getNombre() . '<td>'; 
    echo '</tr>';
}