<h1>Exercice 4</h1>

<p> Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<h2> Afficher le Résultat</h2>


<?php

$phrase="Engage le jeu que je le gagne";
$phrase2= strtolower($phrase);
$phrase2= str_replace ($phrase2);
$phrase3= strrev($phrase2);


if($phrase2==$phrase3) {
    echo "La phrase $phrase est un palindrome"; 
}else{
    echo "La phrase $phrase n'est pas un palindrome";
}



