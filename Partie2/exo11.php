<h1> Exercice 11 </h1>

<p> Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date. </p>

<h2> Afficher le résultat </h2>

<?php

echo formaterDateFr("2018-02-23");

function formaterDateFr(string $date) {

$dateform = strtotime($date);
$trad=new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$result = $trad->format($dateform);

return $result;

}


?>