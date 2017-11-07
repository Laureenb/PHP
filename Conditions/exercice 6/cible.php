<!-- 6. La structure "Switch".

Dans le switch, on indique au début sur quelle variable on travaille. On dit à PHP : Je vais analyser la valeur de $note. Après, on utilise des case pour analyser chaque cas (case 0,case 10, etc.). Cela signifie : Dans le cas où la valeur est 0… Dans le cas où la valeur est 10…

Avantage : on n'a plus besoin de mettre le double égal ! Défaut : ça ne marche pas avec les autres symboles (< > <= >= !=). En clair, le switch ne peut tester que l'égalité.
 -->
 
	<a href="formulaire.php">

	<?php 

		$note = $_GET['note']; 
 
		switch ($note) {
			case ($note <= 3) :
				echo("Ce travail est nuuuul");
				break;
			case ($note > 3 and $note <= 9) :
				echo("Ce travail n'est pas terrible");
				break;
			case ($note > 10 and $note <= 14) :
				echo("C'est pas mal");
				break;
			case ($note > 14 and $note <= 18) :
				echo("Bravo!");
				break;
			case ($note > 18 and $note <= 20) :
				echo("Police! Arrêtez ce tricheur!");
				break;
			default:
				echo("humm, pas possible...");
				break;
		}

	?>