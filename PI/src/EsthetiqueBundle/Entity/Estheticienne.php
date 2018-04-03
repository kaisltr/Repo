<?php

namespace EsthetiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estheticienne
 *
 * @ORM\Table(name="estheticienne", indexes={@ORM\Index(name="id_centre", columns={"id_centre"})})
 * @ORM\Entity
 */
class Estheticienne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_esth", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEsth;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_esth", type="string", length=255, nullable=false)
     */
    private $nomEsth;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_esth", type="string", length=255, nullable=false)
     */
    private $prenomEsth;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite_esth", type="string", length=255, nullable=false)
     */
    private $specialiteEsth;

    /**
     * @var \CentreEsthetique
     *
     * @ORM\ManyToOne(targetEntity="CentreEsthetique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre_esth")
     * })
     */
    private $idCentre;


}

