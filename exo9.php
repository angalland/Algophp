<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Resultat</h2>

<?php

$age = 37;
$sexe = "F";
$imposable = "imposable";

if ($age >35 && $sexe = true) {
    $imposable = "non imposable";
} elseif ($age >= 18 ) {
    $imposable = "imposable";
//} elseif ($age >20 ) {
   // $imposable = "imposable";
} else {
    $imposable = "non imposable";
}

echo "Age : $age <br>";
echo "Sexe : $sexe <br>";
echo "La personne est $imposable <br>";