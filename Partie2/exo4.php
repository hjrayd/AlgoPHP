<h1> Exercice 4 </h1>

<p> A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"] </p>

<h2> Afficher le résultat </h2>

<?php

$capitales= [
    "France"=> "Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

foreach($capitales as $pays => $capitale) {
    echo "Le pays $pays a pour capitale : $capitale <br>";
}

echo afficherTableHTML($capitales);

function afficherTableHTML ($capitales) {

    ksort($capitales);

    $result="<table border=1>
            <thead>
                <tr>
                    <th> Pays </th>
                    <th>Capitales</th>
                    <th>Lien Wiki </th>
                </tr>
            </thead>
          <tbody>";

    foreach ($capitales as $pays => $capitale) {
            $result .= "<tr>
                        <td> ".mb_strtoupper($pays)."</td>
                        <td> $capitale</td>
                        <td> <a href='https://fr.wikipedia.org/wiki/$capitale' type='_blank'> Wiki </a>
                        </tr>";
          }

          $result.= "</tbody>
                    </table>";
          return $result;
}



?>
