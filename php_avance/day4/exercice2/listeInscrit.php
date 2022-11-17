
<?php
    if (file_exists("inscription.txt")) {
        $f = file("inscription.txt");
        //var_dump($f);
        echo "<br/>";

        echo "<table align='center' border='1'>
        <thead>
            <tr>
                <th>Date</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>";

        foreach ($f as $ligne) {
            $t = explode (";", $ligne);
            
            echo "<tr><td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td></tr>";
        }
        echo "</tbody></table>";

        $id = fopen("inscription.txt", "r");
        
        echo "<table align='center' border='1'>
        <thead>
            <tr>
                <th>Date</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>";

        echo "<br/>";
        //var_dump($id);
        
        while ($ligne=fgets($id)) {
            $t = explode(";",$ligne);
            echo "<tr><td>$t[0]</td><td>$t[1]</td><td>$t[2]</td><td>$t[3]</td></tr>";
        }
        
        echo "</tbody></table>";
        fclose($id);
    }

?>