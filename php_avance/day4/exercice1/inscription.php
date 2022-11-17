
<?php
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $today = date("Y-m-d H:i:s");

        $id = fopen("inscription.txt", "a");

        if($id===FALSE)
            die("Erreur ouverture fichier");
        else
        {
            flock($id, LOCK_EX); // Verrouille le fichier en accès exclusif en écriture 
            fwrite($id, "Inscription de $prenom $nom avec $email à la date $today \n");
            flock($id, LOCK_UN); // Libere tous les verrous

            $r = fclose($id);
            if($r===FALSE) die("Erreur");
        }
    }

?>