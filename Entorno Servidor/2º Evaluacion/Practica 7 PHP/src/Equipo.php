<?php

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/** 
* @ORM\Entity
* @ORM\Table(name="equipo")
* @ORM\Entity(repositoryClass="EquipoRepository")
*/

class Equipo {

    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /** @ORM\Column(type="string") **/
    private $nombre;
    /** @ORM\Column(type="integer") **/
    private $fundacion;
    /** @ORM\Column(type="integer") **/
    private $socios;
    /** @ORM\Column(type="string") **/
    private $ciudad;

    public function getID() {
        return $this->id;
    }

    public function getNombre() {
        return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getFundacion() {
        return $this->id;
    }

    public function setFundacion($fundacion) {
        $this->fundacion = $fundacion;
    }

    public function getSocios() {
        return $this->id;
    }

    public function setSocios($socios) {
        $this->socios = $socios;
    }

    public function getCiudad() {
        return $this->id;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }
}

?>