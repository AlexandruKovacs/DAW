<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno) {
    
    die('Lo siento hubo un problema con el servidor');

} else {
    $sql = 'SELECT * FROM  usuarios LIMIT 5';
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows) {
        // echo '<pre>';
        // var_dump($resultado->fetch_assoc());
        // echo $resultado->fetch_assoc()['nombre'];
        // echo '</pre>';

        while($fila = $resultado->fetch_assoc()) {
            echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br/>';
        }
  
    } else {
        echo 'No hay datos';
    }
}

?>