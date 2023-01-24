<?php

// $id = $_GET['id'];
// $id = $_GET['id'];

try {
    
    $conexion = new PDO('mysql:host=localhost; dbname=prueba_consola', 'root', '');
    
    // METODO QUERY
    // echo "Conexion OK";

    // $resultados = $conexion->query('SELECT * FROM usuarios');

    // $resultados = $conexion->query('INSERT INTO usuarios VALUES(null, "Felipe", "felipe@gmail.com")');

    // $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id");

    // foreach ($resultados as $fila) {
    //     echo $fila['id'] . ' - ' . $fila['nombre'] . ' - ' . $fila['email'] . '<br/>';
    // }

    //METODO PREPARED STATEMENT
    $statement = $conexion->prepare('INSERT INTO usuarios VALUES(null, "Jose", "jose@gmail.com")');
    $statement->execute();

    // $resultados = $statement->fetchAll();
    
    // foreach($resultados as $usuario) {
    //     echo $usuario['nombre'] . '<br/>';
    // }

} catch(PDOException $e) {
    
    echo "Error: " . $e->getMessage();
}

?>