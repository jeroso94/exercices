<?php

class Etudiant
{
    public $nom;
    public $age;

    public static $nbEtudiant;
    private static $nbMax=20;  //attribut de la classe et non d'instance

    public function __construct()  // à chaque création d'une instance, on incrémente l'attribut static de la classe
    {
        self::$nbEtudiant++;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setAge($age)
    {
        if ($age>18) {
            $this->age = $age;
        } else {
            echo "Valeur de l age invalide!";
        } 
    }

    public function infoEtudiant()
    {
        return "Nom: ".$this->nom ." Age: ".$this->age;
    }


    public static function getNbMax()  //méthode de classe
    {
       return self::$nbMax;
    }

}


$e1 = new Etudiant();

$e1->setNom("Johnny");
$e1->setAge(24);

echo "<br/>Nbre actuel etudiants : ".Etudiant::$nbEtudiant;  //appel de l'atribut static

$e2 = new Etudiant();

$e2->setNom("Louis");
$e2->setAge(27);

echo $e1->infoEtudiant();

echo "<br/>Nbre actuel etudiants : ".Etudiant::$nbEtudiant;

echo "<br/>Nbre max etudiants : ".Etudiant::getNbMax();

// echo"<br/>";

// echo $e2->infoEtudiant();