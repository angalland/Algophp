<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Resultat</h2>

<?php

$noteEleve = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$totalNotes = array_sum($noteEleve);
$nbNotes = count($noteEleve);
$moyenneEleve = $totalNotes / $nbNotes;
echo "les notes obtenues par l'élève sont : ";
foreach ($noteEleve as $note){
   echo $note." ";
}
echo " <br> Ca moyenne générale est donc de : ".round($moyenneEleve, 2);