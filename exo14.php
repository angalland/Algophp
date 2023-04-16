<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Resultat</h2>

<?php

function calculerage($date) {
    $dateNaissance = new DateTime($date);
    $dateJour = new DateTime();

    $difference = $dateNaissance ->diff($dateJour);

    return $difference ->format("%D/%M/%Y");
}

echo calculerage(1991-02-15);

