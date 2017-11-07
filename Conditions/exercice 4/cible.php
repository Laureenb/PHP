<!-- 4. Affiche une salutation différente selon l'âge, le genre de l'utilisateur et sa langue maternelle.

Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre.
 -->

 	<a href="formulaire.php">

	<?php 

		$age = $_GET['age']; 
		$genre = $_GET['genre']; 
		$en = $_GET['en']; 
 
 		if ($age <= 12) {
 			if ($en == "no") {
	 			if ($genre == "homme") {
	 				echo("Salut petit!");
	 			}
	 			elseif ($genre == "femme") {
	 				echo("Salut petite!");
	 			}
	 		}
	 		elseif ($en == "yes") {
	 			if ($genre == "homme") {
	 				echo("Hello boy!");
	 			}
	 			elseif ($genre == "femme") {
	 				echo("Hello Girl!");
	 			}
	 		}
 		}
 		if ($age > 12 and $age <= 18) {
 			if ($en == "no") {
	 			if ($genre == "homme") {
	 				echo("Salut l'adolescent!");
	 			}
	 			elseif ($genre == "femme") {
	 				echo("Salut l'adolescente!");
	 			}
	 		}
	 		elseif ($en == "yes") {
	 			if ($genre == "homme") {
	 				echo("Hello Teenage boy!");
	 			}
	 			elseif ($genre == "femme") {
	 				echo("Hello Teenage girl!");
	 			}
	 		}
 		}
 		if ($age > 18 and $age <= 115) {
 			if ($en == "no") {
 			echo("Salut l'adulte!");
 			}
 			elseif ($en == "yes") {
	 			if ($genre == "homme") {
	 				echo("Hello Sir!");
	 			}
	 			elseif ($genre == "femme") {
	 				echo("Hello Lady!");
	 			}
	 		}
 		}
 		elseif ($age > 115) {
 			if ($en == "no") {
	 			if ($genre == "homme") {
	 				echo("Wow! Toujours vivant?");
	 			}
	 			elseif ($genre == "femme") {
	 				echo("Wow! Toujours vivante?");
	 			}
	 		}
	 		elseif ($en == "yes") {
	 			if ($genre == "homme") {
	 				echo("Wow! Still alive, old man?");
	 			}
	 			elseif ($genre == "femme") {
	 				echo("Wow! Still alive, old lady?");
	 			}
	 		}
 		}

	?>