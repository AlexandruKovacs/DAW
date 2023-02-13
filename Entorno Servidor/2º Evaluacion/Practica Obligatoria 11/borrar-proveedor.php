<?php

require_once './src/ArticulosBidireccional.php';
require_once './src/ProveedorBidireccional.php';
require_once 'bootstrap.php';

$idProveedor = $_GET['idArticulo'];
$proveedor = $entityManager->find('ProveedorBidireccional', $idProveedor);

if (!$proveedor) {
    echo '<p class="text-center text-danger">Proveedor no encontrado.</p>';
} else {
    $entityManager->remove($proveedor);
    $entityManager->flush();

    echo '<p class="text-center text-success">Proveedor y sus artículos borrados correctamente.</p>';
}