<?php

require_once 'bootstrap.php';
require_once './src/Articulos.php';
require_once './src/Proveedor.php';

$idArticulo = $_GET['idArticulo'];
$nuevaCantidad = $_GET['nuevaCantidad'];

$articulo = $entityManager->find('Articulos', $idArticulo);

if (!$articulo) {
    echo '<p class="text-center text-danger">Articulo no encontrado.</p>';
} else {
    $articulo->setCantidad($nuevaCantidad);
    $entityManager->flush();
    echo '<p class="text-center text-success">Cantidad modificada correctamente.</p>';
}