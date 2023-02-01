<h1> Exercice 10</h1>

A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.

<h2> Résultat </h2>

<?php

// VARIABLES 

$Montantdu =252;
$Montantpaye = 200;
$Resultat = $Montantpaye - $Montantdu; 
$Restantdu = $Montantdu - $Montantpaye;

echo "Montant à payer : $Montantdu € <br> <br>";
echo "Montant versé : $Montantpaye € <br> <br>";
if ($Resultat>= 0 && $Restantdu<0) {
  echo "À rendre : $Resultat €<br>" ;
} elseif   ( $Resultat<0 && $Restantdu>=0) { //-> permet de changer le visuel en "reste à payer" si le montant payé est inférieur au dû"
   echo "Reste à payer : $Restantdu € <br>";
}


echo "***************************************************************<br> <br>";

// Partie rendue de monnaie

echo "Rendue de monnaie : <br>";

$Résultat;
$Nbmonnaie = 0;
$ListeBillet_pieces = [10, 5, 2, 1];

foreach ($ListeBillet_pieces as $Billet){
    if ($Resultat>0)
    echo intdiv($Resultat, $Billet) ." Billet(s) de " . $Billet ." € - "; //--> intdiv. fonction qui permet de diviser des entiers +> ici il permet de diviser le n de billets à rendre.
    else 
    echo " ";
    $Resultat = $Resultat % $Billet ;
  } 
