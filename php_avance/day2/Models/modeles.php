<?php

class Produit{
    private $id;
    private $libelle;
    private $prix;
    private $quantite;

    public function __construct($libelle,$prix,$quantite){
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }

    public function __toString()
    {
        return "Produit : Libelle =".$this->libelle." Prix = ".$this->prix." Quantite = ".$this->quantite;
    }



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     */
    public function setLibelle($libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of quantite
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     */
    public function setQuantite($quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}