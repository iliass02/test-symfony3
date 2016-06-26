<?php

namespace MainBundle\Entity;

/**
 * Factures
 */
class Factures
{
    /**
     * @var string
     */
    private $idfournisseurs;

    /**
     * @var string
     */
    private $cheminfacture;

    /**
     * @var boolean
     */
    private $admin;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MainBundle\Entity\Clients
     */
    private $idclient;


    /**
     * Set idfournisseurs
     *
     * @param string $idfournisseurs
     *
     * @return Factures
     */
    public function setIdfournisseurs($idfournisseurs)
    {
        $this->idfournisseurs = $idfournisseurs;

        return $this;
    }

    /**
     * Get idfournisseurs
     *
     * @return string
     */
    public function getIdfournisseurs()
    {
        return $this->idfournisseurs;
    }

    /**
     * Set cheminfacture
     *
     * @param string $cheminfacture
     *
     * @return Factures
     */
    public function setCheminfacture($cheminfacture)
    {
        $this->cheminfacture = $cheminfacture;

        return $this;
    }

    /**
     * Get cheminfacture
     *
     * @return string
     */
    public function getCheminfacture()
    {
        return $this->cheminfacture;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     *
     * @return Factures
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idclient
     *
     * @param \MainBundle\Entity\Clients $idclient
     *
     * @return Factures
     */
    public function setIdclient(\MainBundle\Entity\Clients $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \MainBundle\Entity\Clients
     */
    public function getIdclient()
    {
        return $this->idclient;
    }
}

