<h1> Exercice 11 </h1> 

Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.

Exemple: tableau ➔«Peugeot», «Renault», «BMW», «Mercedes»

<h2> Résultat</h2>

<?php

// VARIABLES 

$marques = ["Mercedes", "BMW", "Peugeot", "Renault", "Tesla", "Fiat"]; // ou fonction "array"
$Nbmarque = count($marques);

// Résultat

if ($Nbmarque >= 0)
    echo "Il y a $Nbmarque marque(s) de voitures dans le tableau : <br> <br>";

    foreach($marques as $marque) {      // --> FOREACH .. AS : permet d'afficher en liste vertical la variable souhaitée
    echo "<br> $marque. <br>";
    }
