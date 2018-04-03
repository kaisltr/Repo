<?php

namespace SalleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalleDeSport
 *
 * @ORM\Table(name="salle_de_sport")
 *
 * @ORM\Entity
 */
class SalleDeSport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_salle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_salle", type="string", length=255, nullable=false)
     */
    private $nomSalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_tel_salle", type="integer", nullable=false)
     */
    private $numTelSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="email_salle", type="string", length=255, nullable=false)
     */
    private $emailSalle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire_ouverture_salle", type="time", nullable=false)
     */
    private $horaireOuvertureSalle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire_fermeture_salle", type="time", nullable=false)
     */
    private $horaireFermetureSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=1000, nullable=true)
     */
    private $path;



    /**
     * @var \SanteBundle\Entity\Adresses
     *
     * @ORM\ManyToOne(targetEntity="SanteBundle\Entity\Adresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adresse_salle", referencedColumnName="id_adresses")
     * })
     */
    private $adresseSalle;


}

