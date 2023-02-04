<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $productosSeleccionados = $_REQUEST['productos'];
        $nombre = $_REQUEST['nombre'];
        $direccion = $_REQUEST['direccion'];
        $telefono = $_REQUEST['telefono'];
    
        $conn = mysqli_connect('localhost', 'root', '', 'tienda');

        $productos = implode(', ', $productosSeleccionados);
        $codigoEnvio = substr(md5(rand()), 0, 10);
    
        $consulta = "INSERT INTO pedidos (nombreProd, nombreCom, telefono, direccion, codigoEnvio) 
                VALUES ('$productos', '$nombre', '$telefono', '$direccion', '$codigoEnvio')";

        $resultado = mysqli_query($conn, $consulta);

        $datosEnvio = [];

        if ($resultado) {
            $datosEnvio = [
                'productos' => $productos,
                'nombre' => $nombre,
                'telefono' => $telefono,
                'direccion' => $direccion,
                'codigoEnvio' => $codigoEnvio
            ];

            $JSON = json_encode($datosEnvio);

            echo $JSON;

        } else {
            echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
        }

        mysqli_close($conn);
    }

?>