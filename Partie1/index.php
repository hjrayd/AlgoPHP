<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance). <br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. <br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; </p>

<h2>Afficher le résultat</h2>


<?php

require "Personne.php";


$p1 = new Personne("DUPONT", "Michel", "1980-02-19");

$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");




echo  $p1 -> getNom(). ", " .$p1 -> getPrenom(). ", "  .$p1 -> getDateNaissance()->format("d.m.y");
echo  "<br>" .$p2 -> getNom(). ", " .$p2 -> getPrenom(). ", "  .$p2 -> getDateNaissance()->format("d.m.y"). "<br>";


echo "<br>" .$p1-> getPrenom(). ", " .$p1 -> getNom (). " a " .$p1-> getAge(). "ans. <br>";
echo "<br>" .$p2-> getPrenom(). ", " .$p2 -> getNom (). " a " .$p2-> getAge(). "ans.";
?>

 