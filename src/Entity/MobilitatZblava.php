<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * MobilitatZblava
 *
 *  @ApiResource
 *
 * @ORM\Table(name="mobilitat_zblava")
 * @ORM\Entity
 */
class MobilitatZblava
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
     * @ORM\Column(name="AREA", type="text", length=65535, nullable=true)
     */
    public $area;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PERIMETRE", type="text", length=65535, nullable=true)
     */
    public $perimetre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AMPLADA", type="text", length=65535, nullable=true)
     */
    public $amplada;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ALCADA", type="text", length=65535, nullable=true)
     */
    public $alcada;

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
