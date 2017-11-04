<!-- 1. Affiche un message de salutation différent selon l'heure courante.
Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".
Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".
Astuce: Exploite le fait que l'on puisse combiner des conditions (via les opérateurs AND / OR). -->

<?php

$heure = 16.00;

	if ($heure >= 05.00 AND $heure <= 09.00){
		echo"Bonjour!";
	}
 elseif ($heure >= 09.01 AND $heure <= 12.00){
  echo"Bonne journée!";
 }
 elseif ($heure >= 12.01 AND $heure <= 16.00){
  echo"Bon après-midi!";
 }
 elseif ($heure >= 16.01 AND $heure <= 21.00){
  echo"Bonne soirée!";
 }
 elseif ($heure >= 21.01 AND $heure <= 04.59){
  echo"Bonne nuit!";
}
else {
  echo "il n'y a pas d'heure...";
}

?>