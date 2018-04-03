<?php

namespace SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emploi
 *
 * @ORM\Table(name="emploi", indexes={@ORM\Index(name="description_travail", columns={"description_travail"}), @ORM\Index(name="id_travail", columns={"id_travail"})})
 * @ORM\Entity
 */
class Emploi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_emploi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmploi;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description_travail", type="string", length=255, nullable=false)
     */
    private $descriptionTravail;

    /**
     * @var \Travail
     *
     * @ORM\ManyToOne(targetEntity="Travail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_travail", referencedColumnName="id_trav")
     * })
     */
    private $idTravail;


}

