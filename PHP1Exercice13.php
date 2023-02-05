<h1> Exercice 13</h1>

Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.


<h2> Résultat</h2>

<?php

// VARIABLES

$Notes = array(10, 12, 8, 19, 3, 16, 20, 13, 9);
$sommeNotes = array_sum($Notes); // array_sum permet de faire le total des notes 
$nbNotes = count($Notes); // count permet de compter le nombre de note : ici 9 par exemple
$moyenne = round($sommeNotes / $nbNotes, 2);

// A Afficher 
echo "Les notes obtenues sont : ";
foreach ($Notes as $notes) {
    echo  $notes." ";
}
echo "<br>";

echo "La moyenne est de : " .$moyenne;

