
<?php

require "index.php";

echo  $p1 -> getNom(). ", " .$p1 -> getPrenom(). ", "  .$p1 -> getDateNaissance()->format("d.m.y");
echo  "<br>" .$p2 -> getNom(). ", " .$p2 -> getPrenom(). ", "  .$p2 -> getDateNaissance()->format("d.m.y");

echo $p1 -> getAge ();