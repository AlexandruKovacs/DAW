<?php

$conexion = mysqli_connect("localhost", "root", "", "gestor");

if (mysqli_connect_errno()) {
    echo "Error al conectarse a MySQL: " . mysqli_connect_error();
    exit();
}

$idIncidencia = $_GET['idIncidencia'];

$sql = "SELECT comentarios FROM incidencias WHERE id = '$idIncidencia'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resultado);
$comentarioActual = $fila['comentarios'];
echo "
    <div class='modal-contenido'>
    <h2>Añadir comentarios</h2>
    <div id='mensaje'></div>
    <form id='formComentarios'>
        <input type='hidden' name='idIncidencia' value='$idIncidencia'>
        <label for='comentarios'>Comentarios</label>
        <textarea name='comentarios' id='comentarios'>$comentarioActual</textarea>

        <input type='submit' value='Guardar comentarios'>
    </form>
    <button id='cerrarModal'>Cerrar</button>
    </div>";

mysqli_close($conexion);
?>