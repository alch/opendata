<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * MobilitatPtaxi
 *
 * @ApiResource
 *
 * @ORM\Table(name="mobilitat_ptaxi")
 * @ORM\Entity
 */
class MobilitatPtaxi
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ZONA", type="text", length=65535, nullable=true)
     */
    public $zona;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODI_PARADA", type="integer", nullable=true)
     */
    public $codiParada;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPCIO_ADRECA", type="text", length=65535, nullable=true)
     */
    public $descripcioAdreca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LAT", type="text", length=65535, nullable=true)
     */
    public $lat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LNG", type="text", length=65535, nullable=true)
     */
    public $lng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WKT", type="text", length=65535, nullable=true)
     */
    public $wkt;


}
