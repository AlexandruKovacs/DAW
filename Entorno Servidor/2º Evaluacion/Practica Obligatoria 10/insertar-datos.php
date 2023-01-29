<?php
  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  
  // Conectarse a la base de datos y escapar los datos
  $conn = mysqli_connect("localhost","root","","prueba");

  $nombre = mysqli_real_escape_string($conn, $nombre);
  $apellidos = mysqli_real_escape_string($conn, $apellidos);
  
  // Insertar los datos en la tabla
  $sql = "INSERT INTO datos (nombre, apellidos) VALUES ('$nombre', '$apellidos')";
  mysqli_query($conn, $sql);
  
  // Cerrar la conexión
  mysqli_close($conn);
?>