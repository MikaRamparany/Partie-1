<h1> Exercice 6 </h1>

Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)

<h2> Résultat </h2>

<?php

// VARIABLES 

$PrixU = 9.99;
$valeur€ = "€";
$Quantité = 5;
$TVA = 0.2 ;
$Pourcent = "%";
$Montant = $PrixU * $Quantité * (1+$TVA);

// echo

echo "Prix unitaire de l'article : " .$PrixU .$valeur€;
echo "<br> "; 
echo "Quantité Article(s): " .$Quantité;
echo "<br> "; 
echo "Taux de TVA : " . round($TVA * 100) .$Pourcent; 
echo "<br> ";
echo " Le montant de la facture à régler est de : " . $Montant .$valeur€;

