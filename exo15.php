<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>

<h2>Resultat</h2>

<?php

class Personne {
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    public DateTime $_dateNaissance;
    


    function __construct(string $nom,string $prenom, string $sexe, $_dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime($_dateNaissance);

    }

    public function getNom() : string {
        return $this->_nom;
    }

    public function setNom(string $nom){
        $this->_nom = $nom;
    }

    public function getprenom() : string {
        return $this->_prenom;
    }

    public function setprenom(string $prenom){
        $this->_prenom = $prenom;
    }

    public function getsexe() : string {
        return $this->_sexe;
    }

    public function setsexe(string $sexe){
        $this->_sexe = $sexe;
    }

    public function getdateNaissance(){
        return $this->_dateNaissance;
    }

    public function setdateNaissance($dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }

}


$p1 = new Personne("DUPONT","Michel","Masculin", "1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","Feminin","1985-01-17");

$today = new DateTime;
$birth_date = $p1->_dateNaissance;
$diff = $today->diff($birth_date);

$birth_day2 = $p2->_dateNaissance;
$diff1 = $today->diff($birth_day2);



echo $p1->getnom()." ".$p1->getprenom()." a ".$diff->y." ans <br>";
echo $p2->getnom()." ".$p2->getprenom()." a ".$diff1->y." ans <br>";


