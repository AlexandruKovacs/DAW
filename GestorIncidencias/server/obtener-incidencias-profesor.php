<?php

$conn = new mysqli('localhost', 'id20430323_root', '9Qbgkf/eK-Z&CI|g', 'id20430323_gestor');

$idProfesor = mysqli_real_escape_string($conn, $_GET['idProfesor']);

if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}

$consulta = "SELECT aulas_estancias.nombre AS nombreAula, 
                    grupos.nombre AS nombreGrupo, 
                    tipos_incidencias.tipoIncidencia AS tipoIncidencia, 
                    incidencias.descripcion, 
                    incidencias.fechaCreacion, 
                    incidencias.estado,
                    incidencias.comentarios,
                    incidencias.id
            FROM incidencias

            LEFT JOIN aulas_estancias ON incidencias.idAula = aulas_estancias.id 
            LEFT JOIN grupos ON incidencias.idGrupo = grupos.id 
            LEFT JOIN tipos_incidencias ON incidencias.tipoIncidencia = tipos_incidencias.id
            
        WHERE incidencias.idProfesor = $idProfesor;";

$resultado = $conn->query($consulta);

$incidencias = [];
  
while($fila = $resultado->fetch_assoc()) {
    $incidencias[] = $fila;
}

$JSONIncidencias = json_encode($incidencias);

header('Content-Type: application/json');
echo $JSONIncidencias;

?>