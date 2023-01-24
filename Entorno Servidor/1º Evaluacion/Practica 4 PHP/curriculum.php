<?php

$curriculum = [
    "Nombre" => "Alexandru",
    "Apellidos" => "Kovacs",
    "Telefono" => 123456789,
    "Email" => "alex@gmail.com",
    "Fecha de Nacimiento" => "27/06/2000",
    "Habilidades" => "PHP, Java, JavaScript"
];

foreach ($curriculum as $campo => $dato) {
    echo "<br>" . $campo . ": " . $dato . ".<br>";
}

?>