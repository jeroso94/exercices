<?php

class Ecole{
    private $nom;
    private $adresse;
    private $telephone;

    public function __construct($nom,$adresse,$telephone)  // constructeur avec paramètres
    {
       // echo "Creation de l'objet";
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
    }

    public function getInfoEcole()
    {
        return "Nom: ".$this->nom." Adresse: ".$this->adresse." telephone: ".$this->telephone;
    }

    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
}

$e1 = new Ecole("Ecole1","Paris","+123");
$e2 = new Ecole("Ecole2","Grenoble","+456");
$e3 = new Ecole("Ecole3","Dijon","+789");

// Question 4 : création d'un tableau avec les instances
$tab = array($e1,$e2,$e3);
//var_dump($tab);

//Question 5 : Affichage des données du tableau
foreach ($tab as $e) {
    echo $e->getInfoEcole()."<br/>";
  }

?>