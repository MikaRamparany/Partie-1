<h1> Exercice 14</h1>

Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).

<h2> Résultat </h2> 

<?php 

$dateOfBirth = "17-01-1985";
$today = date("Y-m-d");

$diff = date_diff(date_create($dateOfBirth), date_create($today));
echo 'Age de la personne '.$diff->format('%y') .'  '.'ans'.' '.$diff->format('%m') .' '.'mois'.' '.$diff->format('%d') .' '.'jour';

// ! pour afficher en ANNEE MOIS JOUR il faut à chaque fois inclure $diif-> format() pour chaque valeur, soit anné, mois et jour. 

?> 


