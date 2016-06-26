<?php

namespace MainBundle\Entity;

/**
 * Cartebleue
 */
class Cartebleue
{
    /**
     * @var boolean
     */
    private $typecarte;

    /**
     * @var string
     */
    private $numerocarte;

    /**
     * @var string
     */
    private $dateexpiration;

    /**
     * @var integer
     */
    private $cryptogramme;

    /**
     * @var string
     */
    private $titulairecarte;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MainBundle\Entity\Clients
     */
    private $idclient;


    /**
     * Set typecarte
     *
     * @param boolean $typecarte
     *
     * @return Cartebleue
     */
    public function setTypecarte($typecarte)
    {
        $this->typecarte = $typecarte;

        return $this;
    }

    /**
     * Get typecarte
     *
     * @return boolean
     */
    public function getTypecarte()
    {
        return $this->typecarte;
    }

    /**
     * Set numerocarte
     *
     * @param string $numerocarte
     *
     * @return Cartebleue
     */
    public function setNumerocarte($numerocarte)
    {
        $this->numerocarte = $numerocarte;

        return $this;
    }

    /**
     * Get numerocarte
     *
     * @return string
     */
    public function getNumerocarte()
    {
        return $this->numerocarte;
    }

    /**
     * Set dateexpiration
     *
     * @param string $dateexpiration
     *
     * @return Cartebleue
     */
    public function setDateexpiration($dateexpiration)
    {
        $this->dateexpiration = $dateexpiration;

        return $this;
    }

    /**
     * Get dateexpiration
     *
     * @return string
     */
    public function getDateexpiration()
    {
        return $this->dateexpiration;
    }

    /**
     * Set cryptogramme
     *
     * @param integer $cryptogramme
     *
     * @return Cartebleue
     */
    public function setCryptogramme($cryptogramme)
    {
        $this->cryptogramme = $cryptogramme;

        return $this;
    }

    /**
     * Get cryptogramme
     *
     * @return integer
     */
    public function getCryptogramme()
    {
        return $this->cryptogramme;
    }

    /**
     * Set titulairecarte
     *
     * @param string $titulairecarte
     *
     * @return Cartebleue
     */
    public function setTitulairecarte($titulairecarte)
    {
        $this->titulairecarte = $titulairecarte;

        return $this;
    }

    /**
     * Get titulairecarte
     *
     * @return string
     */
    public function getTitulairecarte()
    {
        return $this->titulairecarte;
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
     * @return Cartebleue
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

