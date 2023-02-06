<?php

    header('Content-Type: application/json');

    $producto = $_REQUEST['producto'];
    $stock = $_REQUEST['stock'];

    $datosEnvio = [];

    $datosEnvio = [
        'producto' => $producto,
        'stock' => $stock
    ];

    $JSON = json_encode($datosEnvio);

    echo $JSON;
?>