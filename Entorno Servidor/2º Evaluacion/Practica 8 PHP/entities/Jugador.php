<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Jugador
 *
 * @ORM\Table(name="jugador", indexes={@ORM\Index(name="jugador_ibfk_1", columns={"equipo"})})
 * @ORM\Entity
 */
class Jugador
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
     * @var string|null
     *
     * @ORM\Column(name="apellidos", type="string", length=50, nullable=true)
     */
    private $apellidos;

    /**
     * @var int|null
     *
     * @ORM\Column(name="edad", type="integer", nullable=true)
     */
    private $edad;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo", referencedColumnName="id")
     * })
     */
    private $equipo;


}
