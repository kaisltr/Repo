<?php

namespace SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maladie
 *
 * @ORM\Table(name="maladie")
 * @ORM\Entity
 */
class Maladie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_maladie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_maladie", type="string", length=255, nullable=false)
     */
    private $nomMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="description_maladie", type="string", length=255, nullable=false)
     */
    private $descriptionMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="traitement", type="string", length=255, nullable=false)
     */
    private $traitement;


}

