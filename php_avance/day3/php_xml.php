<?php

    echo"<h1 align=center>PHP et les fichiers XML</h1>";
    $xml=simplexml_load_file("bib.xml"); 
    // var_dump($xml);

    // 1) Lecture d'un fichier avec un élément
    // echo "Titre :",$xml->titre,"<br />" ;
    // echo "Auteur :",$xml->auteur,"<br />";
    // echo "Date :",$xml->date,"<br />";

    // echo"<br/> <h3 align=center>Premier element </h3>";

    // // 2) Lecture d'un fichier avec plusieurs éléments
    // echo $xml->livre[0]->titre,"<br />" ;
    // echo $xml->livre[0]->auteur,"<br />" ;
    // echo $xml->livre[0]->date,"<br />" ;

    // echo"<br/> <h3 align=center>Deuxieme element </h3>";

    // echo $xml->livre[1]->titre,"<br />" ;
    // echo $xml->livre[1]->auteur,"<br />" ;
    // echo $xml->livre[1]->date,"<br />" ;

    // echo"<br/> <h3 align=center>Troisieme element </h3>";

    // echo $xml->livre[2]->titre,"<br />" ;
    // echo $xml->livre[2]->auteur,"<br />" ;
    // echo $xml->livre[2]->date,"<br />" ;

    // 2-1) Lecture d'un fichier avec plusieurs éléments - foreach
    // foreach($xml->livre as $cle=>$val)
    // {
    //     static $i=1;
    //     echo "$cle $i : $val->titre de $val->auteur paru en $val->date<hr/>";
    //     $i++;
    // }

    foreach($xml->livre as $val)
    {    
        echo "$val->titre de $val->auteur paru en $val->date.<br/>";
        foreach($val->attributes() as $key=>$value)
        {   
            echo $key." : ". $value."<br/>";
        }
        echo"<hr/>";
    }


