<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * TerritoriIllesine
 *
 * @ApiResource
 *
 * @ORM\Table(name="territori_illesine")
 * @ORM\Entity
 */
class TerritoriIllesine
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
     * @ORM\Column(name="CODIINE", type="text", length=65535, nullable=true)
     */
    public $codiine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DISTRICTE", type="integer", nullable=true)
     */
    public $districte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SECCIO", type="integer", nullable=true)
     */
    public $seccio;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ILLA", type="integer", nullable=true)
     */
    public $illa;

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
