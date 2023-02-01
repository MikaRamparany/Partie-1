<h1>  Exercice 8</h1>

Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme


<br> 

</h2> Résultat </h2> 
<br>
<br>

<?php

// VARIABLE 1 et 2

$chiffre = 8;
$prod = 1;

// Solution 1 

echo"Solution 1 : <br>";
for($i =0 ; $i<=10; $i++){
    $prod = $chiffre*$i;
    echo $chiffre . ' fois ' . $i . ' = ' . $prod . '<br> <br>';
 
 }

 // Solution 2
echo "Solution 2 : <br>";

$nombre = 8;
$prod = 1;
$i = 0;
while($i <= 10){
    $prod = $nombre*$i;
    echo $nombre . ' fois ' . $i . ' = ' . $prod . '<br> <br>';
    $i++;
}