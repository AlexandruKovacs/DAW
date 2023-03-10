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
    private $equipo;


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
     * @return JugadorBidireccional
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
     * @return JugadorBidireccional
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
     * @return JugadorBidireccional
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
     * @param \EquipoBidireccional|null $equipo
     *
     * @return JugadorBidireccional
     */
    public function setEquipo(\EquipoBidireccional $equipo = null)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo.
     *
     * @return \EquipoBidireccional|null
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
}