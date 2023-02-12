<?php

require_once 'bootstrap.php';
require_once './src/Articulos.php';
require_once './src/Proveedor.php';

$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$cantidad = $_GET['cantidad'];
$idProveedor = $_GET['idProveedor'];

$nuevoArticulo = new Articulos();

$proveedor = $entityManager->find('Proveedor', $idProveedor);

$nuevoArticulo->setNombre($nombre);
$nuevoArticulo->setDescripcion($descripcion);
$nuevoArticulo->setPrecio($precio);
$nuevoArticulo->setCantidad($cantidad);
$nuevoArticulo->setIdProveedor($proveedor);

$entityManager->persist($nuevoArticulo);
$entityManager->flush();

echo '<p class="text-center text-success">Articulo insertado correctamente.</p>';

?>