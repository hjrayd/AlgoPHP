<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.</p>

<h2>Afficher le résultat</h2>


<?php

$montant=152;
$montantVerse=200;
$billets10=0;
$billets5=0;
$pieces2=0;
$pieces1=0;
$reste1= $montantVerse - $montant;


$billets10= intdiv($reste1, 10);
$reste2= $reste1-(10*$billets10);


$billets5= intdiv($reste2, 5);
$reste3= $reste2-(5*$billets5);


$pieces2= intdiv($reste3, 2);
$reste4= $reste3-(2*$pieces2);


$pieces1= intdiv($reste4, 1);
$reste5= $reste4-(1*$pieces1);

echo "Montant à payer : $montant € <br> Montant versés : $montantVerse € <br> Reste à payer : $reste1 € 
<br> Rendue de monnaie : <br> $billets10 billets de 10, $billets5 billets de 5, $pieces2 pièces de 2, $pieces1 pièces de 1";











