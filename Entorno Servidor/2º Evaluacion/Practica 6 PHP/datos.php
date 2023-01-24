<?php

// ESTABLECEMOS QUE EL TIPO DE CONTENIDO SERÁ TEXTO
header('Content-Type: text/txt; charset=UTF-8');

// RECOGIDA DE DATOS
$fechaNac = $_REQUEST['fecha'];
$codPostal = $_REQUEST['codigopostal'];
$telefono = $_REQUEST['telefono'];

// COMPROBACIÓN FECHA
function validarFecha($fechaNac) {

    if ($fechaNac === '') {
        $resFecha = 'Por favor, selecciona una fecha de nacimiento.';
    } else {
        $resFecha = "La fecha de nacimiento es $fechaNac";
    }

    return $resFecha;
}

// COMPROBACIÓN DEL CÓDIGO POSTAL
function validarCodigoPostal($codPostal) {
    $longitudCodPostal = strlen($codPostal);

    if (($longitudCodPostal === 5) && ($codPostal >= 28004 && $codPostal <= 28053)) {
        $resCodPostal = 'El código postal es de Madrid.';
    } else {
        $resCodPostal = 'Código postal incorrecto.';
    }

    return $resCodPostal;
}

// COMPROBACIÓN DEL NÚMERO DE TELÉFONO
function validarNumeroTelefono($telefono) {

    if (preg_match("/(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}/", $telefono)) {
        $resTelefono = 'Teléfono móvil.';
    } elseif (preg_match("/(\+34|0034|34)?[ -]*(8|9)[ -]*([0-9][ -]*){8}/", $telefono)) {
        $resTelefono = 'Teléfono fijo.';
    } else {
        $resTelefono = 'Número de teléfono incorrecto.';
    }

    return $resTelefono;
}

// LLAMADA DE FUNCIONES
$resFecha = validarFecha($fechaNac);
$resCodPostal = validarCodigoPostal($codPostal);
$resTelefono = validarNumeroTelefono($telefono);

// CREAMOS EL JSON EN FUNCIÓN DE LAS RESPUESTAS DE LAS COMPROBACIONES
$datos = [
    "resFecha" => $resFecha,
    "resCodPostal" => $resCodPostal,
    "resTelefono" => $resTelefono
];

// CODIFICAMOS EL ARRAY A JSON
$JSON = json_encode($datos);

// ESCRIBIMOS EL JSON
echo $JSON;

?>
