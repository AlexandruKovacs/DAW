<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $productosSeleccionados = $_POST['productos'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
    
        $conn = mysqli_connect('localhost', 'root', '', 'tienda');

        $productos = implode(',', $productosSeleccionados);
        $codigoEnvio = substr(md5(rand()), 0, 10);
    
        $consulta = "INSERT INTO pedidos (nombreProd, nombreCom, telefono, direccion, codigoEnvio) 
                VALUES ('$productos', '$nombre', '$telefono', '$direccion', '$codigoEnvio')";

        if (mysqli_query($conn, $consulta)) {
            echo 'Insertado correctamente';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

?>