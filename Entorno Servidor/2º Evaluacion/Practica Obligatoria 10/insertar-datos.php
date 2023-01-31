<?php

    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];

    // Conectarse a la base de datos y escapar los datos
    $conn = mysqli_connect("localhost","root","","prueba");

    $nombre = mysqli_real_escape_string($conn, $nombre);
    $apellidos = mysqli_real_escape_string($conn, $apellidos);

    // Insertar los datos en la tabla
    $sql = "INSERT INTO pedidos (nombre, apellidos) VALUES ('$nombre', '$apellidos')";
    mysqli_query($conn, $sql);

    $datos = [
        "nombre" => $nombre,
        "apellidos" => $apellidos
    ];
    
    // CODIFICAMOS EL ARRAY A JSON
    $JSON = json_encode($datos);
    
    // ESCRIBIMOS EL JSON
    echo $JSON;
    
    mysqli_close($conn);
?>