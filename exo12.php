<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<h2>Resultat</h2>

<?php

$people = [ 
          [
            "prenom" => "mickael",
            "langue" => "FRA",
          ],
          [
            "prenom"=> "virgile",
            "langue"=> "ESP",
          ],
          [
            "prenom" => "Marie-claire",
            "langue" => "ENG",
          ]
        ];

//var_dump ($people);


function bonjourSelonLaLangue($people) {
  foreach ($people as $person) {
     if ($person["langue"] == "FRA") {
       echo "Bonjour";
     } else if ($person["langue"] == "ESP") {
       echo "Hola";
     } else  if ($person["langue"] == "ENG"){
       echo "Hello";
     } else {
       echo "Langage inconnue";
     } 
      echo " ".$person["prenom"];
      echo "<br>";
   }
   
}

bonjourSelonLaLangue($people);

