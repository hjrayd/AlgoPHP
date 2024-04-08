<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Afficher le résultat</h2>

<?php

$date1 = new DateTime("1985-01-17");
$date2 = new DateTime("2018-05-21");
$interval = $date1->diff($date2);

echo "Age de la personne: " . $interval->y . " ans, " . $interval->m." mois, ".$interval->d." jours "; 


