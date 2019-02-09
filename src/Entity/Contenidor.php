<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contenidor
 *
 * @ApiResource
 *
 * @ORM\Table(name="contenidor")
 * @ORM\Entity
 */
class Contenidor
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
     * @ORM\Column(name="CODI", type="integer", nullable=true)
     */
    public $codi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="text", length=65535, nullable=true)
     */
    public $nom;

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
