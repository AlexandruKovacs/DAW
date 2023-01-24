<?php

abstract class Persona {
    public function saludo() {
        return 'Hola!';
    }
}

class Estudiante extends Persona {

}

$alex = new Estudiante;
echo $alex->saludo();