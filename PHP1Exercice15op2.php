<h1> Exercice 15</h1>

Créer une classe Personne (nom, prénom et date de naissance).<br><br>
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.
<br><br>

$p1 = new Personne("DUPONT","Michel", "1980-02-19");<br><br>

$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");

<h2> Résultat</h2>

<?php




// respect des typo stricts déclarés des paramètres de fonctions

class Personne {
    // attributs de la classe
      private string $_prenom;
      private string $_nom;
      private DateTime $DateNaissance;

public function __construct(string $_prenom, string $_nom, Int $DateNaissance) {
   
    $this->_prenom=$_prenom;
    $this->_nom=$_nom;
    $this->DateNaissance= new DateTime($DateNaissance);
  }
  public function get_prenom(){
    return $this-> _prenom;
  } 
  public function get_nom() {
    return $this-> _nom;
  }
  public function getDateNaissance() { 

    return $this->DateNaissance;

  }

  public function AGE()
  { //On a besoin d'une variable AgeToday pour calculer l'âge depuis la date de Naissance: 

    $DateToday= new DateTime();

    $AgeToday= $this->DateNaissance->diff($DateToday);
    return $AgeToday-> format("%y ans.");

  }
  public function __toString() // Permet d'afficher les public function via ECHO. 
  {
    return $this->_prenom. " " .$this->_nom. " a " .$this->AGE() ."<br>";
  }
}
// Une fois les getter créés pour cet exercice on ferme l'accolade principale et ON SOUHAITE pouvoir afficher les information sur notre page WEB, soit : 

// On déclare d'abord les variables qui serviront pour echo: 

$p1 = new Personne ("Michel", "DUPONT", "1980-02-10");

$p2 = new Personne ("Alice", "DUCHEMIN", "1995-01-17");


echo "<form style='background-color:E8E3E2;width: 180px; padding:6px'>";
echo $p1; 
echo "<br>";
echo $p2;
echo "</form>";
//! Rajout de <form> juste pour faire joli. 