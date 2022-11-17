<?php

echo "<br/>Fichier courant:" .__FILE__;
echo "<br/>Serveur:" .$_SERVER["HTTP_HOST"];
echo " - Adresse IP serveur:" .$_SERVER["SERVER_ADDR"];


phpinfo();

$x = 1; // variable globale
$y = 2; // variable globale

echo  "<br/>Somme:" .somme($x,$y);

function somme($a, $b)
{
    $result=$a+$b;
    return $result;
}
