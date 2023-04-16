<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<h2>Resultat</h2>

<?php

$people = [ 
            [ "Mickaël"=>"FRA",
              "français"=>"Salut",
            ], 
            ["Virgile"=>"ESP",
             "espagnol"=>"Hola",
            ],
            ["Marie-claire"=>"ENG",
             "anglais"=>"Hello"
            ]
        ];

//var_dump ($people);


function bonjourCelonLaLangue($people) {
   
}

echo bonjourCelonLaLangue("Mickaël", "FRA");

