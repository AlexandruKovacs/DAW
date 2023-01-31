<?php

function ConexionBBDD($consulta) {

    $conexion = mysqli_connect('localhost', 'root', '', 'tienda');
	
    /* Para seleccionar la bd*/	
	mysqli_select_db($conexion, 'tienda') or die ('No se puede seleccionar la BD');
		
	/* Lanzo la consulta sobre la BD*/
	$resultado = mysqli_query($conexion, $consulta);
		
	/* Para detectar errores*/
	if (mysqli_connect_errno()) {
		printf('<p>Conexión fallida: %s</p>', mysqli_connect_error());
		exit();
	}

	$conexion->close();

    return $resultado;
}

function getID($nombreTabla, $campo, $ID_Tabla) {
	$consulta = "SELECT * FROM " . $nombreTabla . " WHERE ". $campo . " = " . $ID_Tabla . "";

	$db = ConexionBBDD($consulta);
	$GLOBALS['row'] = mysqli_fetch_object($db);
	
    return $GLOBALS['row'];
}

?>