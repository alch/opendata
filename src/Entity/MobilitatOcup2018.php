<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * MobilitatOcup2018
 *
 * @ApiResource
 *
 * @ORM\Table(name="mobilitat_ocup2018")
 * @ORM\Entity
 */
class MobilitatOcup2018
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
     * @ORM\Column(name="CODI_INTERN", type="string", length=64, nullable=true)
     */
    public $codiIntern;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TIPUS_OCUPACIO", type="text", length=65535, nullable=true)
     */
    public $tipusOcupacio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DATA_INICI", type="text", length=65535, nullable=true)
     */
    public $dataInici;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DATA_FI", type="text", length=65535, nullable=true)
     */
    public $dataFi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DURADA", type="integer", nullable=true)
     */
    public $durada;

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
