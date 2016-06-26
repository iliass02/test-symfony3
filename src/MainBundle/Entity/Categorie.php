<?php

namespace MainBundle\Entity;

/**
 * Categorie
 */
class Categorie
{
    /**
     * @var string
     */
    private $nomcategorie;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nomcategorie
     *
     * @param string $nomcategorie
     *
     * @return Categorie
     */
    public function setNomcategorie($nomcategorie)
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }

    /**
     * Get nomcategorie
     *
     * @return string
     */
    public function getNomcategorie()
    {
        return $this->nomcategorie;
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
}

