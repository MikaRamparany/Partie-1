<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>

<h2>Résultat</h2>

<?php

$date = new DateTime("2022-11-15");

class Personne
{
    private string $nom;
    private string $prenom;
    private int $anniv;

    function __construct(string $nom, string $prenom, int $anniv)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->anniv = $anniv;
    }

    function getNom(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function getAnniv($date){
        $ans = $date->diff(new DateTime($this->anniv));
        return $ans->format('%y');
    }
    
}

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

echo "<form style='background-color:E8E3E2;width: 280px; padding:6px'>";

echo $p1->getPrenom() . " " . $p1->getNom() . " a " . $p1->getAnniv($date) . " ans.<br> <br>";

echo $p2->getPrenom() . " " . $p2->getNom() . " a " . $p2->getAnniv($date) . " ans.";

echo "</form>";