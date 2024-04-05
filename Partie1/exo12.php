<h1>Exercice 12</h1>


<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>


<h2>Afficher le résultat</h2>


<?php


$prenoms = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

ksort($prenoms);

foreach ($prenoms as $prenom => $abreviation)
 {
    if ($abreviation=="FRA") {
        $resultat="Salut"; 
    } elseif ($abreviation== "ESP") {
        $resultat="Hola";
    } elseif ($abreviation=="ENG") {
        $resultat="Hello";
    }

    echo "$resultat $prenom <br>";
} 



  





