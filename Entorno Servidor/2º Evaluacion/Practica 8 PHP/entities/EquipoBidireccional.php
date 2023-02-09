<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="equipo")
 */

class EquipoBidireccional
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $socios;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $fundacion;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ciudad;

    /**
     * @ORM\OneToMany(targetEntity="JugadorBidireccional", mappedBy="equipo")
     */
    private $jugadores;

    public function __construct()
    {
        $this->jugadores = new ArrayCollection;
    }
    
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string|null $nombre
     *
     * @return Equipo
     */
    public function setNombre($nombre = null)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string|null
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set socios.
     *
     * @param int|null $socios
     *
     * @return Equipo
     */
    public function setSocios($socios = null)
    {
        $this->socios = $socios;

        return $this;
    }

    /**
     * Get socios.
     *
     * @return int|null
     */
    public function getSocios()
    {
        return $this->socios;
    }

    /**
     * Set fundacion.
     *
     * @param string|null $fundacion
     *
     * @return Equipo
     */
    public function setFundacion($fundacion = null)
    {
        $this->fundacion = $fundacion;

        return $this;
    }

    /**
     * Get fundacion.
     *
     * @return string|null
     */
    public function getFundacion()
    {
        return $this->fundacion;
    }

    /**
     * Set ciudad.
     *
     * @param string|null $ciudad
     *
     * @return Equipo
     */
    public function setCiudad($ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad.
     *
     * @return string|null
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set Jugadores.
     *
     * @param array|null $jugadores
     *
     * @return Equipo
     */
    public function setJugadores($jugadores = null)
    {
        $this->jugadores = $jugadores;

        return $this;
    }
    
    /**
     * Get jugadores.
     *
     * @return array|null
     */
    public function getJugadores()
    {
        return $this->jugadores;
    }
}
