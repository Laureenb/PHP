<!-- Voici un array :
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
Construis une boucle qui affiche chaque élément de l'array à l'aide de foreach
Ensuite, dans ta boucle, conjuge le verbe "coder" en fonction du pronom. (utilise une condition pour cela)
 -->

 <?php

 $pronoms_personnels = array ("Je", "Tu", "Il/Elle","Nous", "Vous", "Elles/Ils");

 foreach ($pronoms_personnels as $value) {
 	if ($value == "Je") {
 		echo "<pre>";
 		print_r($value);
 		echo " code";
 		echo "<pre>";
 	}
 	if ($value == "Tu") {
 		print_r($value);
 		echo " codes";
 		echo "<pre>";
 	}
 	if ($value == "Il/Elle") {
 		print_r($value);
 		echo " code";
 		echo "<pre>";
 	}
 	if ($value == "Nous") {
 		print_r($value);
 		echo " codons";
 		echo "<pre>";
 	}
 	if ($value == "Vous") {
 		print_r($value);
 		echo " codez";
 		echo "<pre>";
 	}
 	elseif ($value == "Elles/Ils") {
 		print_r($value);
 		echo " codent";
 		echo "<pre>";
 	}
 }


 ?>