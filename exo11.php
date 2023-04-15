<h1>Exercice 11</h1>

<p>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.<p>

<h2>Resultat</h2>

<?php

$marquedevoiture = array("Peugeot", "Renault", "BMW", "Mercedes", "Toyota", "citroen");
$nombredemarque = count($marquedevoiture);
echo "il y a ".$nombredemarque." marques de voitures dans le tableau : <br>";
echo $marquedevoiture[0]."<br>";
echo $marquedevoiture[1]."<br>";
echo $marquedevoiture[2]."<br>";
echo $marquedevoiture[3]."<br>";