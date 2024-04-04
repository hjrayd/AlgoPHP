<h1> Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
forme : <br> Table de 8 :
1 x 8 = 8 <br>
2 x 8 = 16 <br>
3 x 8 = 24 … <br>
Remarque : proposer 2 solutions avec 2 types de boucles.
</p>
<h2>Afficher le ràsultat</h2>


 <?php

$nbr=8;

for($i = 1; $i <= 10; $i++) {
    $resultat=$nbr*$i;
    echo " $i x $nbr = $resultat <br>";
}

$j = 1;
$nbr=6;
while($j <= 10) {
    $resultat= $j*$nbr;
    echo "<br> $j x $nbr = $resultat <br>";
    $j++;
}