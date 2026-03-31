<!-- Mini projet : Gestion d'un panier de courses (Tableaux php)
    Objectif : Gerer les panniers d'achats avec des tableaux php -->
<?php
    $panier = [
        ["nom" => "Pomme","prix" => 5000,"quantite" => 25],
        ["nom" => "Banane","prix" => 2500,"quantite" => 12],
        ["nom"=>"Fraise","prix" => 3500,"quantite" => 32],
        ["nom"=>"Poire","prix" => 1500,"quantite" => 2]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        table,thead,tbody{
            border : black solid 2px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Nom</td>
                <td>PrixUnitaire</td>
                <td>Quantité</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
            <?php
                //1- calculer le total du panier : Parcourir le tableau et calculer le total de chaque produit (prix x quantite)
                $totalPanier = 0;
                foreach($panier as $val){
                    $nom = $val["nom"];
                    $prix = $val["prix"];
                    $quantite = $val["quantite"];
                    $totalPrixProduit = $prix * $quantite;
                    $totalPanier += $totalPrixProduit;

                    echo "<tr>";
                    echo "<td>$nom</td> <td>$prix</td> <td>$quantite</td> <td>$totalPrixProduit</td>";
                    echo "</tr>";
                }
                echo "<tr><td></td> <td></td> <td></td> <td>$totalPanier</td> </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>