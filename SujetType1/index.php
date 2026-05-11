<!-- PARTIE A : Structure de controles -->
<?php
    require("config.php");
    // Script php pour verifier si un nombre est pair ou impair
    $nombre = 3;
    function verifier($nb){
        if($nb % 2 == 0){
            echo "Le nombre $nb est pair";
        }
        else{
            echo "Le nombre $nb est impair";
        }
    }
    verifier($nombre);

    // Calculer la moyenne
    $notes = [11,15,16,9,14];
    function moyenne($tab){
        $somme = 0;
        foreach($tab as $note){
            $somme += $note;
        }
        $moyenne = $somme/count($tab);
        return $moyenne;
    }
    $maMoyenne = moyenne($notes);
    echo "<br>La moyenne est $maMoyenne";

    // Table de multiplication
    function afficherTableMult($n){
        for($i=0;$i<=10;$i++){
            echo "<br>$n * $i = ". $i * $n;
        }
    }
    echo "<br>";
    afficherTableMult($nombre);
    echo "<h2>PARTIE B</h2>";
    $jours = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
    // Affichage de chaque jour
    foreach($jours as $jour){
        echo "<br>";
        echo $jour;
    }
    // Afficher uniquement le premier et le dernier jour
    echo "<br>Le premier jour est : ". $jours[0];
    echo "<br>Le dernier jours est : " . $jours[count($jours) - 1];

    // Verifier si rabe existe dans le tableau:
        $noms = ["Rakoto","Rasoa","Rabe"];
        $exist = FALSE;
        foreach($noms as $nom){
            if($nom == "Rabe"){
                $exist = TRUE;
                break;
            }
        }
        if($exist){
            echo "<br>Le nom Rabe existe dans la liste !";
        }
        else{
            echo "<br>Le nom Rabe n'existe pas dans la liste";
        }

        echo "<h2>PARTIE B</h2>";
        function carre($n){
            return $n**2;
        }
        echo "Le carre de $nombre est : ".carre($nombre);

        function direBonjour($nom){
            echo "<br>Bonjour $nom";
        }
        direBonjour($noms[2]);
        echo "<h2>PARTIE C</h2>";
        // require("config.php"); au debut du script
        echo "Bienvenue sur : $site";
    ?>