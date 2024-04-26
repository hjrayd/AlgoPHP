<h1> Exercice 14 </h1>

<p> En utilisant les ressources de la page https://www.php.net/manual/fr/book.filter.php, vérifier si une adresse mail a le bon format. </p>

<h2> Afficher le résultat </h2>


<?php

$adresseMail = "contact@elan";

if(filter_var($adresseMail2, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse $adressMail est une adresse valide";
  }else{
    echo "L'adresse  $adresseMail  est une adresse invalide";
  }


?>