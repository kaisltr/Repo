<?php

namespace EsthetiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paquet
 *
 * @ORM\Table(name="paquet", indexes={@ORM\Index(name="id_packet_centre", columns={"id_packet_centre"})})
 * @ORM\Entity
 */
class Paquet
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_packet", type="string", length=255, nullable=false)
     */
    private $nomPacket;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_packet", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixPacket;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_packet", type="string", length=255, nullable=false)
     */
    private $contenuPacket;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_packet_centre", type="integer", nullable=false)
     */
    private $idPacketCentre;

    /**
     * @var \CentreEsthetique
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CentreEsthetique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_packet", referencedColumnName="id_centre_esth")
     * })
     */
    private $idPacket;


}

