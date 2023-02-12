<?php

require_once 'bootstrap.php';
require_once './src/Proveedor.php';
require_once './src/Articulos.php';

$idArticulo = $_GET['idArticulo'];

$articulos = $entityManager->getRepository('Articulos')
    ->findBy(['id' => $idArticulo]);


foreach ($articulos as $articulo) {
    echo $articulo->getCantidad();
}