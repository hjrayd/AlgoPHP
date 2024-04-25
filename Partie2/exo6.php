<h1> Exercice 6 </h1>

<p> Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);
</p>

<h2> Afficher le résultat </h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements) {

    $result = "<select id='liste'>";

    $result .= "<option value='$elements[0]'>$elements[0]</option>";

    $result .= "<option value='$elements[1]' selected>$elements[1]</option>";

    $result .= "<option value='$elements[2]'>$elements[2]</option>"; 

  $result .= "</select>";

  return $result;
}


?>