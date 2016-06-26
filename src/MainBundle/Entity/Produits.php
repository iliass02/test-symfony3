<?php

namespace MainBundle\Entity;

/**
 * Produits
 */
class Produits
{
    /**
     * @var string
     */
    private $nomproduit;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $prix;

    /**
     * @var string
     */
    private $titrecategorie;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MainBundle\Entity\Clients
     */
    private $idclient;

    /**
     * @var \MainBundle\Entity\Categorie
     */
    private $categorie;


    /**
     * Set nomproduit
     *
     * @param string $nomproduit
     *
     * @return Produits
     */
    public function setNomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    /**
     * Get nomproduit
     *
     * @return string
     */
    public function getNomproduit()
    {
        return $this->nomproduit;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set titrecategorie
     *
     * @param string $titrecategorie
     *
     * @return Produits
     */
    public function setTitrecategorie($titrecategorie)
    {
        $this->titrecategorie = $titrecategorie;

        return $this;
    }

    /**
     * Get titrecategorie
     *
     * @return string
     */
    public function getTitrecategorie()
    {
        return $this->titrecategorie;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Produits
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Produits
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Produits
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Produits
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
     * Set idclient
     *
     * @param \MainBundle\Entity\Clients $idclient
     *
     * @return Produits
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

    /**
     * Set categorie
     *
     * @param \MainBundle\Entity\Categorie $categorie
     *
     * @return Produits
     */
    public function setCategorie(\MainBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \MainBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}

