<?php
declare(strict_types = 1);
// Fonction qui affiche bonjour tout le monde
function direBonjour(){
    echo "Bonjour tout le monde !";
}

//Fonction avec param saluer(nom)
function saluer($nom){
    echo "Bonjour $nom";
}


//Fonction avec retour carre(nombre)
function carre($nombre){
    return $nombre ** 2;
}


//Somme de deux nombres
function somme($a,$b){
    return $a + $b;
}


//Nombre pair ou impair (retour typee)
function estPair($nombre) : bool{
    if($nombre%2 == 0){
        return true;
    }
    return false;
}

//Maximum de trois nombres
function maximum($a,$b,$c){
    if ($a > $b && $a > $c){
        return $a;
    }
    elseif($b>$c){
        return $b;
    }
    return $c;
}


//Factorielle
function factorielle($nombre){
    if($nombre == 1){
        return 1;
    }
    return $nombre * factorielle($nombre - 1);
}


//Fonction qui retourne la somme des elements d'un tableau
function sommeTableau($tab){
    $somme = 0;
    foreach($tab as $val){
        $somme+=$val;
    }
    return $somme;
}


//Compter les voyelles
function compterVoyelles($texte){
    $cpt = 0;
    $lowerText = str_split(strtolower($texte));
    
    foreach($lowerText as $val){
        if($val == "a" || $val == "e" || $val == "o" || $val == "u" || $val == "i" || $val == "y"){
            $cpt+=1;
        }
    }
    return $cpt;
}

//Fonction avec param par defaut
function puissance($base,$exposant=4){
    return $base ** $exposant;
}


//Fonction récursive
function sommeRecursive($n){
    if($n == 1){
        return 1;
    }
    return $n + sommeRecursive($n - 1);
}


//Chaine inversee
function chaineInverse($chaine){
    $tailleChaine = strlen($chaine) - 1;
    $chaineInversee = "";
    while($tailleChaine >= 0){
        $chaineInversee = $chaineInversee . $chaine[$tailleChaine];
        $tailleChaine -= 1;
    }
    return $chaineInversee;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fonction Dire Bonjour</h1>
    <p><?php direBonjour();?></p>

    <h1>Fonction Saluer</h1>
    <p><?php saluer("Jean");?></p>

    <h1>Carre d'un nombre</h1>
    <p><?php echo carre(2);?></p>

    <h1>Somme de deux nombres</h1>
    <p><?php echo somme(1,2);?></p>

    <h1>Nombre pair ou impair</h1>
    <p><?php echo "Est Pair 2 : " . estPair(2);?></p>

    <h1>Maximum entre 3 membres</h1>
    <p><?php echo maximum(6,9,1);?></p>

    <h1>Factorielle</h1>
    <p><?php echo factorielle(5);?></p>

    <h1>Somme des elements d'un tableau</h1>
    <p><?php echo sommeTableau([1,2,3,4,5]);?></p>

    <h1>Compter les voyelles</h1>
    <p><?php echo compterVoyelles("hello world")?></p>

    <h1>Puissance Dynamique</h1>
    <p><?php echo puissance(4);?></p>

    <h1>Somme récursive</h1>
    <p><?php echo sommeRecursive(10);?></p>

    <h1>Chaine inversee</h1>
    <p><?php echo chaineInverse("HelloWorld");?></p>
</body>
</html>