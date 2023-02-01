<h1> Exercice 10</h1>

A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.

<h2> Résultat </h2>

<?php

// VARIABLES 

$Montantdu =152;
$Montantpaye = 200;
$Resultat = $Montantpaye - $Montantdu; 
$Restantdu = $Montantdu - $Montantpaye;

echo "Montant à payer : $Montantdu € <br> <br>";
echo "Montant versé : $Montantpaye € <br> <br>";
if ($Resultat>= 0 && $Restantdu<0) {
  echo "À rendre : $Resultat €<br>" ;
} elseif   ( $Resultat<0 && $Restantdu>=0) {
   echo "Reste à payer : $Restantdu € <br>";
}


echo "***************************************************************<br> <br>";

// Partie rendue de monnaie

echo "Rendue de monnaie : <br>";

$Résultat;
$Nbmonnaie = 0;
$ListeBillet_pieces = [10, 5, 2, 1];

foreach ($ListeBillet_pieces as $Billet) {

    echo " Billet(s) " . $Billet . " : " . intdiv($Resultat, $Billet); //--> fonction qui permet de diviser des entiers +> ici il permet de diviser le n de billets à rendre.

    $Resultat = $Resultat % $Billet;
}