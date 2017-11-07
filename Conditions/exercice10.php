<!-- 10. Exercice ternaire

Dans un script ternaire.php déclare à l'aide d'une expression ternaire, une variable $bonjour dont la valeur est un message de salutation selon qu'une autre variable $genre soit 'H' ou 'F'.
Termine par afficher la valeur de $bonjour. -->

<?php

$genre = "H";
$bonjour = ($genre == "F")? "Bonjour Madame !" : "Bonjour Monsieur !";
	echo ($bonjour);

?>