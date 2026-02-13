<!-- Exo 1 : Fréquence des lettres -->
 <?php
    $str = "programmation";
    echo $str . "<br>";
    $cleanStr = "";
    // afficher combien de fois une lettre apparait...
    for($i = 0; $i < strlen($str); $i++){ //supprimer les doublons
      if(!str_contains($cleanStr,$str[$i])){
         $cleanStr = $cleanStr . $str[$i];
      }
    }
    for($i = 0; $i<strlen($cleanStr); $i++){
      $cpt = 0;
      for($j = 0; $j<strlen($str);$j++){
         if($cleanStr[$i] === $str[$j]){
            $cpt++;
         }
      }
      //affichage pour chaque lettre :
      echo $cleanStr[$i] . " : " . $cpt;
      echo "<br>";
    }

   // Exo 2 : tableau associatif
   $notes = [
      "Alice" => 15,
      "Bob" => 9,
      "Charlie" => 18,
      "David" => 12
   ];
   // Afficher la moyenne :
   $somNotes = 0;
   foreach($notes as $cle => $valeur){
      $somNotes += $valeur;
   }
   $moyenne = $somNotes / count($notes);
   echo "La moyenne est : " . $moyenne;
   echo "<br>";

   // Exo 3 : Pair ou impair 
   $nombre = 3;
   if($nombre % 2 == 0){
       echo "<br>".$nombre." est pair !";
   }
   else{
      echo "<br>".$nombre." est impair !";
   }

   // Exo 4 : Mention
   $note = 20;
   $mention = "";
   if($note < 10){
      $mention = "Ajourné";
   }elseif($note >= 10 && $note< 12){
      $mention = "Passable";
   }elseif($note >= 12 && $note < 14){
      $mention = "Assez bien";
   }elseif($note >= 14 && $note < 16){
      $mention = "Bien";
   }elseif($note >= 16 && $note <= 20){
      $mention = "Très bien";
   }else{
      echo "<br> Note invalide !!";
   }
   if($mention !== ""){
      echo "<br> Note : ".$note." Mention : ".$mention;
   }
   
   // Exo 4 : Table de multiplication
   $tableNb = 7;
   for($i=0; $i<=10; $i++){
      echo "<br> ".$tableNb."x".$i." = ".$tableNb * $i;
   }

   // Exo 5 : Compter le nbr de voyelles dans une chaine
   $chaine = "Bonjour, je suis une phrase.";
   $voyelles = "aeoiuy";
   $count = 0;
   for($i=0; $i<strlen($chaine); $i++){
      if(str_contains($voyelles,$chaine[$i])){
         $count++;
      }
   }
   echo "<br>"."Le nombre de voyelles dans : ".$chaine." est : ".$count;

 ?>
