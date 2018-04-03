<?php

namespace SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cabinet
 *
 * @ORM\Table(name="cabinet")
 * @ORM\Entity
 */
class Cabinet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cabinet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCabinet;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_tel_cabinet", type="integer", nullable=false)
     */
    private $numTelCabinet;
    /**
     * @var integer
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_resp_cabinet", referencedColumnName="id")
     * })

     */
    private $id_resp_cabinet;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire_ouverture_cabinet", type="time", nullable=false)
     */
    private $horaireOuvertureCabinet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaire_fermeture_cabinet", type="time", nullable=false)
     */
    private $horaireFermetureCabinet;

    /**
     * @var string
     * @ORM\Column(name="adresseCabinet", type="string", nullable=false)

     */
    private $adresseCabinet;

    /**
     * @return int
     */
    public function getIdCabinet()
    {
        return $this->idCabinet;
    }

    /**
     * @param int $idCabinet
     */
    public function setIdCabinet($idCabinet)
    {
        $this->idCabinet = $idCabinet;
    }

    /**
     * @return int
     */
    public function getNumTelCabinet()
    {
        return $this->numTelCabinet;
    }

    /**
     * @param int $numTelCabinet
     */
    public function setNumTelCabinet($numTelCabinet)
    {
        $this->numTelCabinet = $numTelCabinet;
    }

    /**
     * @return \DateTime
     */
    public function getHoraireOuvertureCabinet()
    {
        return $this->horaireOuvertureCabinet;
    }

    /**
     * @param \DateTime $horaireOuvertureCabinet
     */
    public function setHoraireOuvertureCabinet($horaireOuvertureCabinet)
    {
        $this->horaireOuvertureCabinet = $horaireOuvertureCabinet;
    }

    /**
     * @return \DateTime
     */
    public function getHoraireFermetureCabinet()
    {
        return $this->horaireFermetureCabinet;
    }

    /**
     * @param \DateTime $horaireFermetureCabinet
     */
    public function setHoraireFermetureCabinet($horaireFermetureCabinet)
    {
        $this->horaireFermetureCabinet = $horaireFermetureCabinet;
    }

    /**
     * @return Adresses
     */
    public function getAdresseCabinet()
    {
        return $this->adresseCabinet;
    }

    /**
     * @param Adresses $adresseCabinet
     */
    public function setAdresseCabinet($adresseCabinet)
    {
        $this->adresseCabinet = $adresseCabinet;
    }

    /**
     * @return mixed
     */
    public function getIdRespCabinet()
    {
        return $this->id_resp_cabinet;
    }

    /**
     * @param mixed $id_resp_cabinet
     */
    public function setIdRespCabinet($id_resp_cabinet)
    {
        $this->id_resp_cabinet = $id_resp_cabinet;
    }


}

