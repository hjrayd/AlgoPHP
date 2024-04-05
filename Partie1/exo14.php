<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Afficher le résultat</h2>

<?php

$journais=17;
$moisnais=01;
$anneenais=1985;

$jour=21;
$mois=05;
$annee=2018;

if ($jour >= $journais) {
    $resultat1 = $jour - $journais; 
 } elseif ( $jour < $journais) {
    $resultat1= abs($jour-$journais);
 }

if ($mois >= $moisnais) {
    $resultat2 = $mois - $moisnais;
} elseif ( $mois < $moisnais ) {
    $resultat2 = abs ($mois - $moisnais);
}

if ( $annee>= $anneenais) {
    $resultat3 = $annee - $anneenais;
} 

echo "Age de la personne : $resultat3 ans $resultat2 mois $resultat1 jours";

