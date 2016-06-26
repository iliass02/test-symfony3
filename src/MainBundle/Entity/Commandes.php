<?php

namespace MainBundle\Entity;

/**
 * Commandes
 */
class Commandes
{
    /**
     * @var boolean
     */
    private $payer;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MainBundle\Entity\Adresselivraison
     */
    private $idadresselivraison;

    /**
     * @var \MainBundle\Entity\Produits
     */
    private $idproduit;

    /**
     * @var \MainBundle\Entity\Clients
     */
    private $idclient;


    /**
     * Set payer
     *
     * @param boolean $payer
     *
     * @return Commandes
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return boolean
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commandes
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
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
     * Set idadresselivraison
     *
     * @param \MainBundle\Entity\Adresselivraison $idadresselivraison
     *
     * @return Commandes
     */
    public function setIdadresselivraison(\MainBundle\Entity\Adresselivraison $idadresselivraison = null)
    {
        $this->idadresselivraison = $idadresselivraison;

        return $this;
    }

    /**
     * Get idadresselivraison
     *
     * @return \MainBundle\Entity\Adresselivraison
     */
    public function getIdadresselivraison()
    {
        return $this->idadresselivraison;
    }

    /**
     * Set idproduit
     *
     * @param \MainBundle\Entity\Produits $idproduit
     *
     * @return Commandes
     */
    public function setIdproduit(\MainBundle\Entity\Produits $idproduit = null)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return \MainBundle\Entity\Produits
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set idclient
     *
     * @param \MainBundle\Entity\Clients $idclient
     *
     * @return Commandes
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

