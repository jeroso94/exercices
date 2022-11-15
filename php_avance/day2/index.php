
<?php
    require_once("Models/repository.php");
    $manager = new DaoProduit();
    $produits = $manager->listProduit();
    //var_dump($produits);

    echo"<h1 align='center'> Bienvenue à PDO, DAO et l'orienté objet avec PHP </h1> <br/>";

    echo"Pour ajouter un produit cliquer <a href=Views/formProduit.html>ici</a><br/>";

?>

<table align="center" border="1">
<tr><th>ID</th><th>Libelle</th><th>Prix</th><th>Quantite</th></tr>
    <?php
        foreach($produits as $produit)
        {
            echo"<tr>";
            echo"<td>".  $produit->getId()."</td>";
            echo"<td>".  $produit->getLibelle()."</td>";
            echo"<td>".  $produit->getPrix()."</td>";
            echo"<td>".  $produit->getQuantite()."</td>";
            echo"</tr>";
        }
    ?>
</table>