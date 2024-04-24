<h1> Exercice 2 </h1>

<p> Soit le tableau suivant: <code> $capitales= ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"]; </code><br>
    Réaliser un algorithme permettant d'afficher le tableau HTML suivant 
    (notez que le nom du pays s'affichera en majuscules et que le tableau est trié par ordre alphabétique du nom du pays) grâce à une fonction personnalisée.
</p>

<h2> Résultat </h2>

<?php

$capitales= [
    "France"=> "Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie" => "Rome"
];


foreach($capitales as $pays => $capitale) {
    echo "Le pays $pays a pour capitale : $capitale <br>";
}

echo afficherTableHTML($capitales);

function afficherTableHTML ($capitales) {

    $result="<table border=1>
            <thead>
                <tr>
                    <th> Pays </th>
                    <th>Capitales</th>
                </tr>
            </thead>
          <tbody>";

          foreach ($capitales as $pays => $capitale) {
            $result .= "<tr>"
          }

          return $result;
}



?>