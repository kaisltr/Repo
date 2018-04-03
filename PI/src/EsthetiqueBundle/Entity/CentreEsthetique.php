<?php

namespace EsthetiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CentreEsthetique
 *
 * @ORM\Table(name="centre_esthetique")
 * @ORM\Entity
 */
class CentreEsthetique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_centre_esth", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCentreEsth;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_centre_esth", type="string", length=255, nullable=false)
     */
    private $nomCentreEsth;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel_centre_esth", type="integer", nullable=false)
     */
    private $telCentreEsth;



    /**
     * @var \SanteBundle\Entity\Adresses
     *
     * @ORM\ManyToOne(targetEntity="SanteBundle\Entity\Adresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adresse_centre_esth", referencedColumnName="id_adresses")
     * })
     */
    private $adresseCentreEsth;


}

