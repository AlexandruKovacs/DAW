<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="jugador")
 */
class JugadorBidireccional
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
     * @ORM\Column(type="string", length=50)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="integer")
     */
    private $edad;

    /**
     * @ORM\ManyToOne(targetEntity="EquipoBidireccional", inversedBy="jugadores")
     * @ORM\JoinColumn(name="idEquipo", referencedColumnName="id")
     */
    private $idEquipo;

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
     * @return Jugador
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
     * Set apellidos.
     *
     * @param string|null $apellidos
     *
     * @return Jugador
     */
    public function setApellidos($apellidos = null)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos.
     *
     * @return string|null
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set edad.
     *
     * @param int|null $edad
     *
     * @return Jugador
     */
    public function setEdad($edad = null)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad.
     *
     * @return int|null
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set equipo.
     *
     * @param \Equipo|null $idEquipo
     *
     * @return Jugador
     */
    public function setIdEquipo(\Equipo $idEquipo = null)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get equipo.
     *
     * @return \Equipo|null
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }
}