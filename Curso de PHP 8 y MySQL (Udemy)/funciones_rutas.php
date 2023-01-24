<?php

// * PATHINFO_DIRNAME // Devuelve el directorio padre del archivo
// * PATHINFO_BASENAME // Devuelve el nombre del archivo con su extensión
// * PATHINFO_EXTENSION // Devuelve la extensión del archivo
// * PATHINFO_FILENAME // Devuelve el nombre del archivo


echo pathinfo('documento.txt', PATHINFO_FILENAME);

$resultados = glob('sesiones/*.{php,html,txt}', GLOB_BRACE);
print_r($resultados);

echo basename('carpeta1/carpeta2/archivo.php', '.php');

echo dirname('carpeta1/carpeta2/archivo.php');

?>