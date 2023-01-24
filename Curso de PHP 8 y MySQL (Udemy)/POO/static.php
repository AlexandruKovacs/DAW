<?php

class Persona {
    public static $dia = '7 de Septiembre';

    public static function saludo($nombre = null) {
        if ($nombre) {
            return 'Hola, buen día ' . $nombre . '.';
        }
        return 'Hola, buen dia.';
    }
}

$alex = new Persona;
echo $alex->saludo('Alex');

echo '<br />';

echo Persona::saludo('Alex');