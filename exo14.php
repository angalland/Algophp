<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Resultat</h2>

<?php

$today = new DateTime();
$birth_date = DateTime::createFromFormat('d/m/Y', "02/01/1991");

$diff = $today->diff($birth_date);

echo "Age de la personne : " . $diff->y . " an(s) " . $diff->m . " mois " . $diff->d . " jour(s)";


