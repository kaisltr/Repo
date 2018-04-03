<?php

namespace EsthetiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", length=3, nullable=false)
     */
    private $rating;

    /**
     * @var \CentreEsthetique
     *
     * @ORM\ManyToOne(targetEntity="CentreEsthetique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="centre_id", referencedColumnName="id_centre_esth")
     * })
     */
    private $centre;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}

