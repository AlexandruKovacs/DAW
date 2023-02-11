<?php

require_once './src/ArticulosBidireccional.php';
require_once './src/ProveedorBidireccional.php';
require_once 'bootstrap.php';

$idArticulo = $_GET['idArticulo'];

$articulo = $entityManager->find('ArticulosBidireccional', $idArticulo);

if (!$articulo) {
    echo '<p class="text-center text-danger">Articulo no encontrado.</p>';
} else {
    $entityManager->remove($articulo);
    $entityManager->flush();

    echo '<p class="text-center text-success">Artículo borrado correctamente.</p>';
}