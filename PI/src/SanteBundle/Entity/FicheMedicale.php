<?php

namespace SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheMedicale
 *
 * @ORM\Table(name="FicheMedicale")
 * @ORM\Entity
 */
class FicheMedicale
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fiche", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFiche;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10, nullable=false)
     */
    private $sexe;

    /**
     * @var float
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=false)
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="groupe_sanguin", type="string", length=4, nullable=false)
     */
    private $groupeSanguin;

    /**
     * @var float
     *
     * @ORM\Column(name="pression_arterielle", type="float", precision=10, scale=0, nullable=false)
     */
    private $pressionArterielle;

    /**
     * @var string
     *
     * @ORM\Column(name="tabac", type="string", length=3, nullable=false)
     */
    private $tabac;

    /**
     * @var string
     *
     * @ORM\Column(name="alcool", type="string", length=3, nullable=false)
     */
    private $alcool;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var float
     *
     * @ORM\Column(name="IMC", type="float", precision=10, scale=0, nullable=false)
     */
    private $imc;

    /**
     * @var float
     *
     * @ORM\Column(name="respiration", type="float", precision=10, scale=0, nullable=false)
     */
    private $respiration;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=false)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="allergie", type="string", length=30, nullable=false)
     */
    private $allergie;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fiche_user", referencedColumnName="id")
     * })
     */
    private $idFicheUser;


}

