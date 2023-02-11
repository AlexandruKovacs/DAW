<?php

require_once 'bootstrap.php';
require_once './entities/ProveedorBidireccional.php';
require_once './entities/ArticulosBidireccional.php';

$idProveedor = $_GET['idProveedor'];

if ($idProveedor != '') {

    $articulos = $entityManager->getRepository('ArticulosBidireccional')
    ->findBy(['proveedor' => $idProveedor]);

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