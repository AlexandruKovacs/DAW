<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table(name="equipo")
 * @ORM\Entity
 */
class Equipo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="socios", type="integer", nullable=true)
     */
    private $socios;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fundacion", type="string", length=50, nullable=true)
     */
    private $fundacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ciudad", type="string", length=50, nullable=true)
     */
    private $ciudad;



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
}
