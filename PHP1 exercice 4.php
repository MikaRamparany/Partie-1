<h1> Exercice 4 </h1>

 Ecrire un algorithme permettant de savoir si une phrase est palindrome 

<h2> Résultat </h2> 
<?php 

// Variables 


$chaineDeCaracteres= "Engage le jeu que je le gagne";
$phrase = strtoupper(str_replace(' ','',$chaineDeCaracteres));
$inverse=  strrev($phrase);

if($phrase == $inverse) { 
    echo $chaineDeCaracteres . " est palindrome";
} else {
    echo $chaineDeCaracteres. " n'est pas palindrome"; 

}
?>
