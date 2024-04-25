<h1> Exercice 7 </h1>

<p> Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2> Afficher le résultat </h2>

<?php

$elements= [
    "Choix 1"=> "",
    "Choix 2"=> "checked",
    "Choix 3"=> ""
];


echo genererCheckbox($elements);

function genererCheckbox($elements) {

    $result="<fieldset>";
   
    foreach ($elements as $choix => $coche) {

        $result.= "<input type='checkbox' id='$choix' name='$choix' $coche>
        <label for='$choix'> $choix</label> <br>";
    }

    $result .="</fieldset>";

    return $result;



}

?>