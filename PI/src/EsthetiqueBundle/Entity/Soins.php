<?php

namespace EsthetiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soins
 *
 * @ORM\Table(name="soins", indexes={@ORM\Index(name="id_esth_soins", columns={"id_esth_soins"})})
 * @ORM\Entity
 */
class Soins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_soins", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSoins;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_soins", type="string", length=255, nullable=false)
     */
    private $nomSoins;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_soins", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixSoins;

    /**
     * @var string
     *
     * @ORM\Column(name="hammam", type="string", length=255, nullable=false)
     */
    private $hammam;

    /**
     * @var string
     *
     * @ORM\Column(name="maquillage", type="string", length=255, nullable=false)
     */
    private $maquillage;

    /**
     * @var string
     *
     * @ORM\Column(name="manicure", type="string", length=255, nullable=false)
     */
    private $manicure;

    /**
     * @var string
     *
     * @ORM\Column(name="coiffure", type="string", length=255, nullable=false)
     */
    private $coiffure;

    /**
     * @var \Estheticienne
     *
     * @ORM\ManyToOne(targetEntity="Estheticienne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_esth_soins", referencedColumnName="id_esth")
     * })
     */
    private $idEsthSoins;


}

