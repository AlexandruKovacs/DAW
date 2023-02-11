<?php

require_once 'bootstrap.php';
require_once './entities/ProveedorBidireccional.php';
require_once './entities/ArticulosBidireccional.php';

$cantidad = $_GET['cantidad'];

switch ($cantidad) {
    case '0':
        $minCantidad = 0;
        $maxCantidad = 9;
        break;

    case '1':
        $minCantidad = 10;
        $maxCantidad = 50;
        break;

    case '2':
        $minCantidad = 50;
        $maxCantidad = 100;
        break;

    case '3':
        $minCantidad = 100;
        $maxCantidad = 200;
        break;

    case '4':
        $minCantidad = 200;
        $maxCantidad = 99999;
        break;

    default:
        $minCantidad = 0;
        $maxCantidad = 0;
        break;
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
    echo '<td>' . $articulo->getCantidad() . ' uds</td>';
    echo '<td>' . $proveedor->getNombre() . '<td>'; 
    echo '</tr>';
}