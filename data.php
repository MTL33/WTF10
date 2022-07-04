<?php
// Nos datas (le modèle)
$gerant = [
    "nom" => "Charlier",
    "prenom" => "Pierre"
];

// TABLEAU VIDE 

$personnel = [];

// JE PUSH LA PREMIERE VALEUR 

$personnel[] = [
    "nom" => "Charlier",
    "prenom" => "BOB",
    "service" => "Administratif"
];

// JE PUSH LA SECONDE VALEUR

$personnel[] = [
    "nom" => "Rikolas",
    "prenom" => "Jeff",
    "service" => "Animation"
];

// JE PUSH LA THIRD VALEUR

$personnel[] = [
    "nom" => "John",
    "prenom" => "Cena",
    "service" => "Plomberie"
];


myPrint_r($personnel);


?>