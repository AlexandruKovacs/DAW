<?php

require_once 'bootstrap.php';
require_once './src/Proveedor.php';
require_once './src/Articulos.php';

$idArticulo = $_GET['idArticulo'];

$articulos = $entityManager->getRepository('Articulos')
    ->findBy(['id' => $idArticulo]);


foreach ($articulos as $articulo) {
    echo '<input type="number" class="form-control" value="' . $articulo->getCantidad() . '" required>';
    echo '<button class="btn btn-success w-25" id="modificar"><i class="fa-solid fa-check"></i></button>';
    echo '<button class="btn btn-danger" id="cerrarModificar"><i class="fa-solid fa-xmark"></i></button>';
}