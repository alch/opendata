<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * MobilitatParadabus
 *
 *  @ApiResource
 *
 * @ORM\Table(name="mobilitat_paradabus")
 * @ORM\Entity
 */
class MobilitatParadabus
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
     * @var int|null
     *
     * @ORM\Column(name="CODI_PARADA", type="integer", nullable=true)
     */
    public $codiParada;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LINIA", type="text", length=65535, nullable=true)
     */
    public $linia;

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
