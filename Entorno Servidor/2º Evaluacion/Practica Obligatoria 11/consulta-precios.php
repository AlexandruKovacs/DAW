<?php

require_once 'bootstrap.php';
require_once './entities/ProveedorBidireccional.php';
require_once './entities/ArticulosBidireccional.php';

$precio = $_GET['precio'];

if ($precio == 'bajo') {
    $minPrecio = 0;
    $maxPrecio = 25;
} elseif ($precio == 'medio') {
    $minPrecio = 50;
    $maxPrecio = 100;
} elseif ($precio == 'alto') {
    $minPrecio = 100;
    $maxPrecio = 9999;
}

if ($precio != '') {

    $selectArticulos = $entityManager->createQuery("
    SELECT art
    FROM ArticulosBidireccional art
    WHERE art.precio BETWEEN $minPrecio AND $maxPrecio
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