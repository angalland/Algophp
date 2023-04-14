<?php

$age = 32;
$sex = "F";

if(($sex ="F" && $age >=18 && $age <=35) || ($sex ="H" && $age >=20)) {
    echo "Age : ".$age."<br>";
    echo "Sexe : ".$sex."<br>";
    echo "La personne est imposable";
} else {
    echo "Age : ".$age."<br>";
    echo "Sexe : ".$sex."<br>";
    echo "La personne est  non imposable";
}