<h1>Exercice5</h1>
Ecrire un algo qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales.

<h2> Résultat</h2>
<?php 

// Liste VARIABLES


$entier = 100;
$valeurf= "francs";
$valeur€= "€";
$tauxdechange = 6.55957;
$résultat = round($entier/$tauxdechange,2);

// Résultat 

echo "Montant en francs :" . $entier;
echo"<br>"; 
echo"<br>"; 

echo "$entier francs = $résultat"  ;

