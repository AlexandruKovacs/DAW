<?php

    $conn = mysqli_connect('localhost', 'root', '', 'tienda');
    $productos = [];
    
    mysqli_select_db($conn, 'tienda') or die ('No se puede seleccionar la BD');
    $idCategoria = (int) $_GET['idCategoria'];

    $consulta = "SELECT * FROM productos WHERE idCategoria = $idCategoria";
    $resultado = mysqli_query($conn, $consulta);
        
    if (mysqli_connect_errno()) {
        printf('<p>Conexión fallida: %s</p>', mysqli_connect_error());
        exit();
    };

    while ($fila = mysqli_fetch_object($resultado)) {
        array_push($productos, $fila->nombre);
    };

    $conn->close();

    header('Content-Type: application/json');
    $JSON = json_encode($productos);

    echo $JSON;

?>