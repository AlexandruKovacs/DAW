<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Articulos
 *
 * @ORM\Table(name="articulos", indexes={@ORM\Index(name="idProveedor", columns={"idProveedor"})})
 * @ORM\Entity
 */
class ArticulosBidireccional implements JsonSerializable
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
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="precio", type="integer", nullable=false)
     */
    private $precio;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @ORM\ManyToOne(targetEntity="ProveedorBidireccional", inversedBy="articulos")
     * @ORM\JoinColumn(name="idProveedor", referencedColumnName="id")
     */
    private $proveedor;


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
     * @return Articulos
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
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return ArticulosBidireccional
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio.
     *
     * @param int $precio
     *
     * @return ArticulosBidireccional
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio.
     *
     * @return int
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set cantidad.
     *
     * @param int $cantidad
     *
     * @return ArticulosBidireccional
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad.
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set proveedor.
     *
     * @param \ProveedorBidireccional|null $proveedor
     *
     * @return ArticulosBidireccional
     */
    public function setProveedor(\ProveedorBidireccional $proveedor = null)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor.
     *
     * @return \ProveedorBidireccional|null
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'cantidad' => $this->cantidad,
            'proveedor' => $this->proveedor,
        ];
    }
}
