<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedor
 *
 * @ORM\Table(name="proveedor")
 * @ORM\Entity
 */
class ProveedorBidireccional
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=false)
     */
    private $direccion;

    /**
     * @ORM\OneToMany(targetEntity="ArticulosBidireccional", mappedBy="proveedor")
     */
    private $articulos;

    public function __construct()
    {
        $this->articulos = new ArrayCollection;
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
     * @param string $nombre
     *
     * @return ProveedorBidireccional
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion.
     *
     * @param string $direccion
     *
     * @return ProveedorBidireccional
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion.
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set articulos.
     *
     * @param array|null $articulos
     *
     * @return ProveedorBidireccional
     */
    public function setArticulos($articulos = null)
    {
        $this->articulos = $articulos;

        return $this;
    }
    
    /**
     * Get articulos.
     *
     * @return array|null
     */
    public function getArticulos()
    {
        return $this->articulos;
    }
}
