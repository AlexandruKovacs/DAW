<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion() {
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais . '.';
    }
}

$alex = new Persona;
$alex->nombre = 'Alex Kovacs';
$alex->edad = 22;
$alex->pais = 'Rumanía';
$alex->mostrarInformacion();

echo '<br />';

$carlos = new Persona;
$carlos->nombre = 'Carlos Alberto';
$carlos->edad = 24;
$carlos->pais = 'España';
$carlos->mostrarInformacion();