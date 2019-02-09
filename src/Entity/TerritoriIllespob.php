<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * TerritoriIllespob
 *
 * @ApiResource
 *
 * @ORM\Table(name="territori_illespob")
 * @ORM\Entity
 */
class TerritoriIllespob
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
     * @ORM\Column(name="CODI_INE", type="text", length=65535, nullable=true)
     */
    public $codiIne;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NOMBRE_HABITANTS", type="integer", nullable=true)
     */
    public $nombreHabitants;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NOMBRE_DONES", type="integer", nullable=true)
     */
    public $nombreDones;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NOMBRE_HOMES", type="integer", nullable=true)
     */
    public $nombreHomes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DONES_00_16", type="integer", nullable=true)
     */
    public $dones0016;

    /**
     * @var int|null
     *
     * @ORM\Column(name="HOMES_00_16", type="integer", nullable=true)
     */
    public $homes0016;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DONES_17_29", type="integer", nullable=true)
     */
    public $dones1729;

    /**
     * @var int|null
     *
     * @ORM\Column(name="HOMES_17_29", type="integer", nullable=true)
     */
    public $homes1729;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DONES_30_49", type="integer", nullable=true)
     */
    public $dones3049;

    /**
     * @var int|null
     *
     * @ORM\Column(name="HOMES_30_49", type="integer", nullable=true)
     */
    public $homes3049;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DONES_50_69", type="integer", nullable=true)
     */
    public $dones5069;

    /**
     * @var int|null
     *
     * @ORM\Column(name="HOMES_50_69", type="integer", nullable=true)
     */
    public $homes5069;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DONES_70", type="integer", nullable=true)
     */
    public $dones70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="HOMES_70", type="integer", nullable=true)
     */
    public $homes70;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMBRE_VEHICLES", type="text", length=65535, nullable=true)
     */
    public $nombreVehicles;

    /**
     * @var float|null
     *
     * @ORM\Column(name="LAT", type="float", precision=10, scale=0, nullable=true)
     */
    public $lat;

    /**
     * @var float|null
     *
     * @ORM\Column(name="LNG", type="float", precision=10, scale=0, nullable=true)
     */
    public $lng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="WKT", type="text", length=65535, nullable=true)
     */
    public $wkt;


}
