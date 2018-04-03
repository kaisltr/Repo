<?php

namespace SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Travail
 *
 * @ORM\Table(name="travail")
 * * @ORM\Entity
 */
class Travail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_trav", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTrav;

    /**
     * @var \SanteBundle\Entity\Cabinet
     *
     * @ORM\ManyToOne(targetEntity="SanteBundle\Entity\Cabinet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cab_trav", referencedColumnName="id_cabinet")
     * })
     */
    private $idCabTrav;




}

