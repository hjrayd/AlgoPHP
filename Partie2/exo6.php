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

    foreach ($elements as $genre) {

      $result .= "<option value='genre'>$genre</option>";
  }

  $result .= "</select>";

  return $result;
}


?>