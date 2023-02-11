<?php

require_once 'bootstrap.php';
require_once './src/Articulos.php';
require_once './src/Proveedor.php';

$selectProveedor = $entityManager->createQuery('SELECT pro FROM Proveedor pro');
$proveedores = $selectProveedor->getResult();

echo '<option value="">Todos</option>';
foreach ($proveedores as $proveedor) {
    echo '<option value="' . $proveedor->getId() . '">' . $proveedor->getNombre() . '</option>';
}