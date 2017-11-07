<!-- 8. La réécrire, mais sans ELSE.

Il est possible de réaliser exactement la même chose, mais avec une simple instruction if (sans else). Essaye. -->

<?php

 $age = 33;
 $genre = "feminin";
 $message = "Désolé, vous ne remplissez pas les critères de sélection.";

 if ($age > 21  and $age <= 40 and $genre == "feminin"){
 	$message = "Bonjour, bienvenue parmi nous!";
 }

 echo $message;

?>