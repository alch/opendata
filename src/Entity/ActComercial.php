<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ActComercial
 *
 * @ApiResource
 *
 * @ORM\Table(name="act_comercial")
 * @ORM\Entity
 */
class ActComercial
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
     * @ORM\Column(name="CODI_ACCES", type="string", length=64, nullable=true)
     */
    public $codiAcces;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRECA", type="text", length=65535, nullable=true)
     */
    public $adreca;

    /**
     * @var int|null
     *
     * @ORM\Column(name="EPIGRAF_IAE", type="integer", nullable=true)
     */
    public $epigrafIae;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EPIGRAF_DESC", type="text", length=65535, nullable=true)
     */
    public $epigrafDesc;

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
