<h1> Exercice 12</h1>

A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG

<h2> Résultat</h2>

<?php

// VARIABLES 

$prenom = ["Mickael"=>"FRA", "Virgile"=>"ESP", "Marie-Claire"=>"ENG", "Günter"=>"ALL"];
$bonjour = array("Salut !", "Hola que tal", "Hello");

echo "<br> Tableau 1<br>";
foreach ($prenom as $element => $bonjour) {
    echo "<br>";
    switch ($bonjour) {
        case "FRA";
            echo ("Salut ! ").$element;
            break;
        case "ESP";
            echo ("Hola que tal ").$element;
            break;
        case "ENG";
            echo ("Hello ").$element;
            break;
        case "ALL";
            echo ("Hallo") . $element;
            break;
    }
}
echo "<br><br>";
echo ("Tableau 2<br>");

ksort($prenom);
foreach ($prenom as $element => $bonjour) {
    echo "<br>";
    switch ($bonjour) {
        case "FRA";
            echo ("Salut ! ").$element;
            break;
        case "ESP";
            echo ("Hola que tal ").$element;
            break;
        case "ENG";
            echo ("Hello ").$element;
            break; 
    }
}
