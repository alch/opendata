<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * EquipamentsTots
 *
 * @ApiResource
 *
 * @ORM\Table(name="equipaments_tots")
 * @ORM\Entity
 */
class EquipamentsTots
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
     * @ORM\Column(name="NOM", type="text", length=65535, nullable=true)
     */
    public $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRECA", type="text", length=65535, nullable=true)
     */
    public $adreca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CATEGORIA", type="text", length=65535, nullable=true)
     */
    public $categoria;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TIPUS", type="text", length=65535, nullable=true)
     */
    public $tipus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WKT", type="text", length=65535, nullable=true)
     */
    public $wkt;

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


}
