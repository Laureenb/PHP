

	<a href="formulaire.php">

	<?php 

		$note = $_GET['note']; 
 
 		if ($note <= 3) {
 			echo("Ce travail est nuuuul");
 		}
 		if ($note > 3 and $note <= 9) {
 			echo("Ce travail n'est pas terrible");
 		}
 		if ($note == 10) {
 			echo("Tout juste!");
 		}
 		if ($note > 10 and $note <= 14) {
 			echo("C'est pas mal");
 		}
 		if ($note > 14 and $note <= 18) {
 			echo("Bravo!");
 		}
 		elseif ($note > 18 and $note <= 20) {
 			echo("Police! Arrêtez ce tricheur!");
 		}

	?>