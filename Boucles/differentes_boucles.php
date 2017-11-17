 <?php

// Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de  while

 $numero = 0;
 while ( $numero <= 120) {
 	echo $numero++;
 }

 // Ecris une boucle qui affiche les numéros de 1 à 120 à l'aide de for

for ($numeros = 0; $numeros != 121 ; $numeros ++) { 
 	echo $numeros ."<br/>";
 }
 echo "<br/>";

// Crée un tableau contenant tous les prénoms des personnes composant ta classe. Affiche ces prénoms à l'aide d'une boucle.

$personnes = ["Thomas", "Marie", "Syl", "Nico"];
foreach ($personnes as $value) {
	print_r($value ."<br/>");
}

 ?>