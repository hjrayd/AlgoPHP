<h1> Exercice 5 </h1>

<p> Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput); </p>

<h2> Afficher le résultat </h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];


echo afficherForm($nomsInput);

function afficherForm($nomsInput) {
    
    $result = "<form>";

    foreach ($nomsInput as $info) {
        $result .= "<label for='$info' >$info </label><br>
        <input type='text' id='$info' name='$info'><br>";
    }

    $result .= "</form>";

    return $result;

    }

?>