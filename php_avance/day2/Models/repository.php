<?php
    require_once(dirname(__FILE__)."/../Config/connexion.php");
    require_once("modeles.php");

    class DaoProduit{

        public function createProduit(Produit $produit)
        {
            $pdoConnexion = new PDOConnexion();
            $pdo = $pdoConnexion->createConnexion();

            $sql = "INSERT INTO Produit (libelle, prix, quantite)
                    VALUES ('".$produit->getLibelle()."', '".$produit->getPrix()."', '".$produit->getQuantite()."')";
            $produitInserted = $pdo->exec($sql);
            //var_dump($produitInserted);
            echo "New product created successfully";
        }
    
        public function listProduit()
        {

            $produits=array();
            $i=0;
            $pdoConnexion = new PDOConnexion();
            $pdo = $pdoConnexion->createConnexion();
            $strSQL = "SELECT * FROM produit";
            //execution de la requête et affichage des résultats
            foreach ($pdo->query($strSQL) as $row) {
                $produit = new Produit($row['libelle'],$row['prix'],$row['quantite']);
                $produit->setId($row['id']);
                //echo $row['libelle']." ".$row['prix']." ".$row['quantite']."<br/>";
                $produits[$i]=$produit;
                $i++;
            }
            return $produits;

            // $pdoConnexion = new PDOConnexion();
            // $pdo = $pdoConnexion->createConnexion();

            // $stmt = $pdo->prepare("SELECT * FROM produit");
            // $stmt->execute();
            // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // return $result;
            // //var_dump($result);
        }
    
        public function deleteProduit(Produit $produit)
        {
            //appel au PDO pour faire la suppression
        }
    
        public function updateProduit(Produit $produit)
        {
            //appel au PDO pour faire la mise à jour
        }
    }
