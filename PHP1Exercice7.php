<h1> Exercice 7</h1>

Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge: <br> <br>
Poussin: entre 6 et 7 ans<br>
Pupille: entre 8 et 9 ans<br>
Minime: entre 10 et 11 ans<br>
Cadet: à partir de 12 ans<br>
<br>
Si la catégorie n’est pas gérée, merci de le préciser.

<h2> Résultat</h2>

<?php
//VARIABLES

$CatPou =  "Poussin";
$CatPup = "Pupille";
$CatMin =  "Minime";
$CatCadet = "Cadet";
$Age = 4;


    if($Age >= 12) {
        echo "L'enfant qui a $Age ans appartient à la catégorie des $CatCadet.";
    } elseif($Age >= 10) {
        echo "L'enfant qui a $Age ans appartient à la catégorie des $CatMin.";
    } elseif($Age >= 8 ) {
        echo "L'enfant qui a $Age ans appartient à la catégorie des $CatPup.";
    } else{
        echo "L'enfant qui a $Age ans appartient à la catégorie des $CatPou.";
    } 
         
