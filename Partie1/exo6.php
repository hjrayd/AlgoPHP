<h1> Exercice 6 </h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, 
    son prix hors taxe et un taux de TVA (exprimé en décimal.Ex 20% -> 0.2 )</p>

<h2>Afficher le Résultat</h2>

<?php

$prixUnite = 9.99;
$quantite = 5;
$valeurTva = 0.2;
$totalTTC = $quantite * $prixUnite * (1+ $valeurTva);

echo "Prix unitaire de l'article : $prixUnite <br> 
Quantité : $quantite <br>
Taux de TVA : $valeurTva <br>
Le montant de la facture à régler est de : $totalTTC";