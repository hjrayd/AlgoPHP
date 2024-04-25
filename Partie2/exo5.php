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
                    
    $result .= "<label for='$nomsInput[0]' >$nomsInput[0] </label><br>
                    <input type='text' id='$nomsInput[0]' name='$nomsInput[0]'><br>";

        $result .=        "<label for='$nomsInput[1]'>$nomsInput[1]:</label><br>
                <input type='$nomsInput[1]' name='$nomsInput[1]'> <br>";

                $result .=  "<label for='$nomsInput[2]'>$nomsInput[2]:</label> <br>
                <input type='text' id='$nomsInput[2]' name='$nomsInput[2]'> <br>";

    $result .= "</form>";

    return $result;
}


?>