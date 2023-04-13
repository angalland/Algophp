<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Resultat</h2>

<?php

$age = 10.5;


if ($age >11 ) {
    $categorie = "Cadet";
} elseif ($age >9) {
    $categorie = "Minime";
} elseif ($age >7 ) {
     $categorie = "Pupille";
} elseif ($age >=6) {
    $categorie = "Poussin"; 
} else {
    $categorie ="non reconnue";
}
    echo "L'enfant qui a $age ans appartient à la catégorie << $categorie >> <br>";
