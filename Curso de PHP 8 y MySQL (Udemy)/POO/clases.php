<?php 

//Ejemplo 1- Como l hariamos sin Programacion Orientada a Objetos

// $nombre = 'Alex';
// $edad = 23;
// $pais = 'España';

// $nombre2 = 'Alejandro';
// $edad2 = 30;
// $pais2 = 'Alemania';

// echo $nombre;

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion() {
        echo 'Hola Mundo';
    }
}

$alex = new Persona;
$alex->nombre = 'Alex Kovacs';
$alex->edad = 22;
$alex->pais = 'Mexico';

$alex->mostrarInformacion();

// echo $alex->nombre . ' tiene ' . $alex->edad . ' años de edad';

$carlos = new Persona;
$carlos->nombre = 'Carlos';
$carlos->edad = 30;
$carlos->pais = 'España';