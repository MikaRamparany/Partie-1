<h1> Exercice 15</h1>

Créer une classe Personne (nom, prénom et date de naissance).<br><br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.
<br><br>
$p1 = new Personne("DUPONT","Michel", "1980-02-19");<br><br>

$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");

<h2> Résultat</h2>

<?php
// respect strict des types déclarés des paramètres de fonctions
class Personne {
    // attributs de la classe
      private string $prenom;
      private string $nom;
      private int$Datebirth;

public function __construct(string $prenom, string $nom, int $Datebirth) {
   
    $this->prenom=$prenom;
    $this->nom=$nom;
    $this->Datebirth=$Datebirth;
  }

}
