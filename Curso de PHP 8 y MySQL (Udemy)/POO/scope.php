<?php

// PUBLIC
// Pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de nuestra clase.

// PROTECTED
// Pueden ser accedidos desde dentro de la clase y otras clases que heredaron. Pero no fuera de estas.

// PRIVATE
// Solo pueden ser accedidos desde dentro de la clase en la que fueron creados.
// Es decir que no podemos acceder a ellos desde otra clase que heredó y tampoco podemos acceder desde fuera de las clases.

class Usuario {
    public $nombre;
    private $correo;

    function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo() {
        return $this->correo;
    }
}

class Miembro extends Usuario {
    public function mostrarCorreo() {
        return 'Este es el correo: ' . $this->correo;
    }
}

$alex = new Miembro('Alex', 'alex@gmail.com');
echo $alex->mostrarCorreo();