<h1> Exercice 10</h1>

A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.

<h2> Résultat </h2>

<?php

// VARIABLES 

$Montantdu = 352;
$Montantpaye = 200;
$Resultat = $Montantpaye - $Montantdu; 
$Restantdu = $Montantdu - $Montantpaye;

echo "Montant à payer : $Montantdu € <br> <br>";
echo "Montant versé : $Montantpaye € <br> <br>";
if ($Resultat>= 0 && $Restantdu<0) {
    echo "À rendre : $Resultat €" ;
} elseif   ( $Resultat<0 && $Restantdu>=0) {
    echo "Reste à payer : $Restantdu € <br>";
}

echo "***************************************************************";

