<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Afficher le résultat</h2>

<?php

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbmarques = count($marques);

echo "Il y a $nbmarques marques de voitures dans la liste : <br>";
foreach ($marques as $valeur) {
   echo "$valeur <br>";
}

