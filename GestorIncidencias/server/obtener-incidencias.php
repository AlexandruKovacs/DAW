<?php

$idProfesor = $_GET['idProfesor'];

$conn = new mysqli('localhost', 'root', '', 'gestor');

if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}

$consulta = "SELECT aulas_estancias.nombre AS nombreAula, 
                    grupos.nombre AS nombreGrupo, 
                    tipos_incidencias.tipoIncidencia AS tipoIncidencia, 
                    incidencias.descripcion, 
                    incidencias.fechaCreacion, 
                    incidencias.estado,
                    incidencias.comentarios
            FROM incidencias

            LEFT JOIN aulas_estancias ON incidencias.idAula = aulas_estancias.id 
            LEFT JOIN grupos ON incidencias.idGrupo = grupos.id 
            LEFT JOIN tipos_incidencias ON incidencias.tipoIncidencia = tipos_incidencias.id
            
        WHERE incidencias.idProfesor = $idProfesor;";

$resultado = $conn->query($consulta);


if ($resultado->num_rows > 0) {

    $incidencias = [];
  
    while($fila = $resultado->fetch_assoc()) {
        $incidencias[] = $fila;
    }

} else {

    $incidencias = [];
}

$JSONIncidencias = json_encode($incidencias);

header('Content-Type: application/json');
echo $JSONIncidencias;

?>