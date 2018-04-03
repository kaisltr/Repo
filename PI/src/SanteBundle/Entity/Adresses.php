<?php

namespace SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresses
 *
 * @ORM\Table(name="adresses")
 * @ORM\Entity
 */
class Adresses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_adresses", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idAdresses;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255, nullable=false)
     */
    private $rue;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=false)
     */
    private $codePostal;

    /**
     * @return int
     */
    public function getIdAdresses()
    {
        return $this->idAdresses;
    }

    /**
     * @param int $idAdresses
     */
    public function setIdAdresses($idAdresses)
    {
        $this->idAdresses = $idAdresses;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * @param string $rue
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    }

    /**
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param int $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    public function __toString()
    {
        return $this->getTitre();
    }


}

