<?php

require_once 'bootstrap.php';
require_once './src/ProveedorBidireccional.php';
require_once './src/ArticulosBidireccional.php';

$precio = $_GET['precio'];

switch ($precio) {
    case '0':
        $minPrecio = 0;
        $maxPrecio = 9;
        break;

    case '1':
        $minPrecio = 10;
        $maxPrecio = 50;
        break;

    case '2':
        $minPrecio = 50;
        $maxPrecio = 100;
        break;

    case '3':
        $minPrecio = 100;
        $maxPrecio = 200;
        break;

    case '4':
        $minPrecio = 201;
        $maxPrecio = 99999;
        break;

    default:
        $minPrecio = 0;
        $maxPrecio = 0;
        break;
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
    echo '<td>' . $articulo->getCantidad() . ' uds</td>';
    echo '<td>' . $proveedor->getNombre() . '<td>'; 
    echo '</tr>';
}