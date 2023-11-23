<?php

include 'fonction.php';


titre("Ceci est un titre");
titre("Ceci est un autre titre",level:2);
titre("Ceci est un autre titre", "Et un sous-titre", 3);

echo get('page', false);

?>