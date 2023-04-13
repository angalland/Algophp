<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Resultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$phraseMin = strtolower($phrase);
$phrase_replace = str_replace(" ","",$phraseMin);
$inverse = strrev($phrase_replace);


if ($phrase_replace == $inverse){
     echo "La phrase << $phrase >> est un palindrome";
}else{
    echo "La phrase << $phrase >> n'est pas un palindrome";
}

