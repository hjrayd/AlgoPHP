<h1> Exercice 9 </h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<h2>Afficher le résultat </h2>

<?php

$nomsradio = ["Monsieur", "Madame", "Mademoiselle"];


echo afficherRadio($nomsradio);

function afficherRadio($nomsradio) {

    $result = "<fieldset>";

    foreach ($nomsradio as $genre ) {
        $result .= "<input type='radio' id='$genre' name='genre' value='$genre'>
        <label for='$genre'>$genre</label><br>";
    }

    return $result;
}
?>