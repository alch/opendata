<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * TerritoriUssol
 * 
 * @ApiResource
 *
 * @ORM\Table(name="territori_ussol")
 * @ORM\Entity
 */
class TerritoriUssol
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
     * @var string|null
     *
     * @ORM\Column(name="CODI_US", type="text", length=65535, nullable=true)
     */
    public $codiUs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPCIO_US", type="text", length=65535, nullable=true)
     */
    public $descripcioUs;

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
