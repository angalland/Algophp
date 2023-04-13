<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php

$Franc = 100;
$euros = $Franc/6.55957;
$eurosArrondi = round($euros, 2);


echo "Montant en francs : $Franc <br>";
echo "$Franc francs = $eurosArrondi € <br>";

 // 1 fr = 0.15244