<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>

<h2>Resultat</h2>

<?php

$montpaye = 152;
$montverse = 200;
$restepaye = $montverse - $montpaye;



$bil10 = 10;
$bil5 = 5;
$mon2 = 2;
$mon1 = 1;

$i=$restepaye;

echo "Rendu de monnaie : <br>";

    $i = floor($i/$bil10); //4
    $m = $restepaye % $bil10; //8
    echo $i." billet de 10€ ";

    $i1 = floor($m/$bil5); // 1
    $m2 = $m % $bil5; // 3
    echo "- $i1 billet de 5€";
    
    $i3 = floor($m2/$mon2); //1
    $m3 = $m2 % $mon2; //1
    echo " - $i3 piece de 2€";
 

    $i4 = floor($m3/$mon1); //1
    echo " - $i4 piece de 1€";

echo "<br>";

$amount = 152;
$paid = 200;
$remain = $paid - $amount;

$currency = [
    [
        "valeur" => 10,
        "type" => "billet(s)"
    ],
    [
        "valeur" => 5,
        "type" => "billet(s)",
    ],
    [
        "valeur" => 2,
        "type" => "piece(s)",
    ],
    [
        "valeur" => 1,
        "type" => "piece(s)",
    ]
    ];

    foreach ($currency as $money) {
        $result = floor($remain / $money["valeur"]); //4
        echo $result." ".$money["type"]." de ".$money["valeur"]."€ - ";
        $remain = $remain % $money["valeur"];//8
    }

echo "<br>";

            