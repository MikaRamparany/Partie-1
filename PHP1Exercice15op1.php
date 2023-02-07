<h1>Exercice 15 - Option 1 : Celle que j'ai trouvé en premier</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.</p>

<h2>Résultat</h2>

Créer une classe Personne (nom, prénom et date de naissance).<br><br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.
<br><br>

$p1 = new Personne("DUPONT","Michel", "1980-02-19");<br><br>

$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");<br><br>

<?php

$date = new DateTime("2022-11-15");

class Personne
{
    private string $_nom;
    private string $_prenom;
    private int $_anniv;

    function __construct(string $_nom, string $_prenom, int $_anniv) //! IMPORTANT : il vaut mieux préciser dans __construct() les typo strinct : string, int ou float(nombre à virgule).
    {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->_anniv = $_anniv;
    }

    function getNom(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function get_Anniv($date){
        $ans = $date->diff(new DateTime($this->_anniv));
        return $ans->format('%y');
    }
    
}

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

echo "<form style='background-color:E8E3E2;width: 280px; padding:6px'>";

echo $p1->getPrenom() . " " . $p1->getNom() . " a " . $p1->get_Anniv($date) . " ans.<br> <br>";

echo $p2->getPrenom() . " " . $p2->getNom() . " a " . $p2->get_Anniv($date) . " ans.";

echo "</form>";