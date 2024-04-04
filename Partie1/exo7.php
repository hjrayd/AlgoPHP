<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge : <br>
Poussin : entre 6 et 7 ans <br>
Pupille : entre 8 et 9 ans <br>
Minime : entre 10 et 11 ans <br>
Cadet : à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Afficher le Résultat</h2>

<?php

$age=10;

if(gettype($age) == "double" || gettype($age) == "integer") {
    if($age >= 12) {
        $resultat= "Cadet";
    } elseif ($age >= 10) {
        $resultat = "Minime";
    } elseif ($age >= 8) {
        $resultat= "Pupille";
    } elseif ($age >= 6) {
        $resultat= "Poussin";
    } else {
        $resultat = "non gérée";
    }

    echo "La personne qui a $age ans est : $resultat <br>";
}