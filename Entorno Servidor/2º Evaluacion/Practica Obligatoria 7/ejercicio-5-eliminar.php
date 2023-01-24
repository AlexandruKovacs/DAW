<?php

    $conexion = mysqli_connect("localhost","root","","ropa");
    $consultaEliminar = "DELETE FROM calzado WHERE talla='".$_POST['talla']."' ";

    if ($conexion->query($consultaEliminar) === TRUE) {
       header("Location: ejercicio-5.php");
    } else {
        echo "Error deleting record: " . $conexion->error;
    }

?>