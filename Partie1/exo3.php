<h1>Exercice 3</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot "aujourd'hui" par "demain".<br> 
Afficher l'ancienne et la nouvelle phrase </p>

<h2> Afficher le Résultat <h2>

<?php

$phrase= "Notre formation DL commence aujourd'hui";
$phrase2= str_replace ("aujourd'hui" , "demain", $phrase);


echo $phrase;
echo $phrase2;

