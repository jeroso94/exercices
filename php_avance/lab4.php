<?php

    class Voiture{

        private $marque;
        private $prix;
        private $couleur;

        private static $vitesseMax = 400;
        private static $nbV=0;

        // constructeur

        public function __construct($marque, $prix, $couleur)
        {
            self::$nbV++;
            $this->marque = $marque;
            $this->prix = $prix;
            $this->couleur = $couleur;
        }

        public static function getVitesseMax(){
            return self::$vitesseMax;
        }


        //méthode d'instance

        public function __toString()  //echo $v
        {
            return "Marque : ".$this->marque." Prix : ".$this->prix." Couleur : ".$this->couleur;
        }

        /**
            * Get the value of marque
            */ 
        public function getMarque()
        {
            return $this->marque;
        }

        /**
            * Set the value of marque
            *
            * @return  self
            */ 
        public function setMarque($marque)
        {
            $this->marque = $marque;

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
            *
            * @return  self
            */ 
        public function setPrix($prix)
        {
            $this->prix = $prix;

            return $this;
        }

        /**
            * Get the value of couleur
            */ 
        public function getCouleur()
        {
            return $this->couleur;
        }

        /**
            * Set the value of couleur
            *
            * @return  self
            */ 
        public function setCouleur($couleur)
        {
            $this->couleur = $couleur;

            return $this;
        }
        public static function getNbV()
        {
            return self::$nbV;
        }
    }

    $v1 = new Voiture("BMW",30000,"Black");
    $v2 = new Voiture("Mercedes",40000,"White");
    $v3 = new Voiture("Wolswagen",15000,"Gris poivre");

    echo $v1; //appel implicite de la méthode __toString()
    echo "<br/>";
    $mesVoitures = array($v1, $v2, $v3);

?>

<h2 align='center'>Total : <?php echo Voiture::getNbV()?></h2>

<h3 align='center'>Vitesse Max: <?php echo Voiture::getVitesseMax()?></h3>

<h2 align="center">Liste</h2>
<table align="center" border="1">
    <tr>
        <th>Marque</th>
        <th>Prix</th>
        <th>Couleur</th>
    </tr>

    <?php
        foreach($mesVoitures as $voiture){
            echo"<tr><td>". $voiture->getMarque()."</td>";
            echo"<td>". $voiture->getPrix()."</td>";
            echo"<td>". $voiture->getCouleur()."</td></tr>";
        }
    ?>
</table>