<?php

function ConexionBBDD($consulta) {

    $conexion = mysqli_connect("localhost","root","","ropa");
	
    /* Para seleccionar la bd*/	
	mysqli_select_db($conexion,"ropa") or die ("No se puede seleccionar la BD");
		
	/* Lanzo la consulta sobre la BD*/
	$resultado = mysqli_query($conexion, $consulta);
		
	/* Para detectar errores*/
	if (mysqli_connect_errno()) {
		printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
		exit();
	}

	$conexion->close();

    return $resultado;
}

function editarDatos($nombreTabla, $datos, $ID_Tabla, $ID_Seleccionado) {
	$consulta = "UPDATE " . $nombreTabla . " SET ";
	$data = array();

	foreach($datos as $clave => $valor){
		$data[] = $clave."="."'".$valor."'";
	}

	$consulta .= implode(',', $data);
	$consulta .= " WHERE ".$ID_Tabla." = ".$ID_Seleccionado."";
	
    return ConexionBBDD($consulta); 
}

function insertarDatos($nombreTabla, $datos) {
	$consulta = "INSERT INTO " . $nombreTabla . " (id, talla, precio, marca, color) VALUES (";
	$data = array();

	foreach($datos as $clave => $valor) {
		$data[] = "'" .$valor . "'";
	}

	$consulta .= implode(',', $data);
	$consulta .= ")";
	
    return ConexionBBDD($consulta); 
}

function insertarDatosLlevar($nombreTabla, $datos) {
	$consulta = "INSERT INTO " . $nombreTabla . " (fecha, pers, pantalon, camiseta, calzado) VALUES (";
	$data = array();

	foreach($datos as $clave => $valor) {
		$data[] = $valor;
	}

	$consulta .= implode(',', $data);
	$consulta .= ");";
	
    return ConexionBBDD($consulta);
}

function getID($nombreTabla, $campo, $ID_Tabla) {
	$consulta = "SELECT * FROM " . $nombreTabla . " WHERE ". $campo . " = " . $ID_Tabla . "";

	$db = ConexionBBDD($consulta);
	$GLOBALS['row'] = mysqli_fetch_object($db);
	
    return $GLOBALS['row'];
}

function getFechaPersona() {
	$consulta = "SELECT fecha,pers FROM llevar";

	$db = ConexionBBDD($consulta);
	$GLOBALS['row'] = mysqli_fetch_object($db);

    return $GLOBALS['row'];
}

?>

