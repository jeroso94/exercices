<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

    <body>

        <?php

            echo"<h1 align=center>PHP et les fichiers XML</h1>";
            $xml=simplexml_load_file("bib2.xml"); 

            foreach($xml->children() as $elementNiveau1=>$valNiveau1)
            {    
                echo "<h3>". ucfirst($elementNiveau1). ": $valNiveau1</h3>";
                foreach($valNiveau1->children() as $elementNiveau2=>$valNiveau2)
                {
                    echo "$elementNiveau2: <b>$valNiveau2</b>";

                    foreach($valNiveau2->attributes() as $key=>$value)
                    {   
                        echo $key." : ". $value."<br/>";
                    }

                    foreach($valNiveau2->children() as $elementNiveau3=>$valNiveau3)
                    {
                        echo "<$elementNiveau3: <b>$valNiveau3</b>";
                    }

                    echo"<hr/>";
                }
            }

            foreach ($xml->children() as $elementNiveau1=>$valNiveau1) {
                echo"<h1 align=center>$valNiveau1</h1>";
                echo"<table border=1 align=center>";
                if($valNiveau1=="livres")
                echo"<tr><th>Titre</th><th>Auteur</th><th>Date</th></tr>";
                else{
                    echo"<tr><th>Marque</th><th>Modele</th><th>Immatriculation</th><th>Prix</th></tr>";
                }
                    foreach ($valNiveau1->children() as $elementNiveau2=>$valNiveau2) {
                    echo"<tr>";
                        foreach ($valNiveau2 as $elementNiveau3=>$valNiveau3) {
                            echo"<td>$valNiveau3</td>";
                        }
                        echo"</tr>";
                }
                echo"</table>";
            }
        ?>
    </body>
</html>