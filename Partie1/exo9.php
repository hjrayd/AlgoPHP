<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Afficher le résultat</h2>

<?php

$age=56;
$sexe=F;

if(gettype($sexe) == "string" || gettype($age) == "integer" ) {
    if($age >=18 and $age <= 35 and $sexe==F ) {
        $resultat = "imposable";
    } elseif ( $age>=20 and $sexe==M) {
        $resultat= "imposable";
    } else {$resultat="non imposable";
    }
    

   echo "Age: $age <br> Sexe: $sexe <br> La personne est $resultat ";
} else {
    echo "Veuillez entrer une valeur numérique<br>";

}
    

    