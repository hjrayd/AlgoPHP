<h1> Exercice 10 </h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit) </p>

<h2> Afficher le résultat </h2>

<?php

$nomsInput = ["Nom", "Prénom", "Adresse mail", "Ville", "Sexe"];
$liste = ["Développeur logiciel", "Designer Web", "Intégrateur", "Chef de projet"];


echo afficherForm($nomsInput);
echo listeDeroulante($liste);

function afficherForm($nomsInput) {
    
    $result = "<form>";

    foreach ($nomsInput as $info) {
        $result .= "<label for='$info' >$info </label><br>
        <input type='text' id='$info' name='$info'><br>";
    }

    function listeDeroulante($liste) {
    
        $result = "<select id='liste'>";
    
        foreach ($liste as $metiers) {
    
          $result .= "<option value='genre'>$metiers</option>";
      }
    
      $result .= "</select> <br>";

      $result .= "<input type='submit' value='Valider'/>";

      $result .= "</form>";

      return $result;
    }
    
    return $result;

    }

?>