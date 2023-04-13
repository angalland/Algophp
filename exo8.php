<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :</p>

<h2>Resultat</h2>

<?php

$nombre = 9;
$prod = 1;
$i = 0;

while($i <= 10){
    $prod = $nombre*$i;
    echo "$nombre x $i = $prod. <br>";
    $i++;
}
 
echo "<br>";

for($i = 0 ; $i <=10; $i++){
    $prod = $nombre * $i;
    echo "$nombre x $i = $prod. <br>";
}
