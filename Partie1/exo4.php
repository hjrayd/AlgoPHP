<h1>Exercice 4</h1>

<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<h2> Afficher le Résultat</h2>


<?php

$phrase="Engage le jeu que je le gagne";
$phrase2= strrev($phrase);


if($phrase==$phrase2) {
    echo "La phrase $phrase est un palindrome"; 
}else{
    echo "La phrase $phrase n'est pas un palindrome";
}



