<h1> Exercice 9 </h1> 

Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).

<h2> Résultat</h2> 

<?php

//VARIABLES 

$Age = 16;
$Sexe = "F";

echo"Age : $Age <br>";
echo "Sexe : $Sexe <br>";
if ($Sexe== "F" & $Age>=17 or $Age<=35) {
    echo "La personne est imposable. ";
} elseif ($Sexe=="M" & $Age > 20){
    echo "La personne est imposable.";
} else {
    echo "Non imposable";
}