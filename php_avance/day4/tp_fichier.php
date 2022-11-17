<?php

$id = fopen("etudiant.txt", "a"); // fichier ouvert en lecture ecriture avec insertion en fin de fichier

if($id===FALSE)
    die("Erreur ouverture fichier");
else
{
    flock($id, LOCK_EX); // Verrouille le fichier en accès exclusif en écriture 
    fwrite($id, "Bonjour GK");
    flock($id, LOCK_UN); // Libere tous les verrous

    $r = fclose($id);
    if($r===FALSE) die("Erreur");
}