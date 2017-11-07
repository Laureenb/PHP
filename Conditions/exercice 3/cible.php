<!-- 3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.

Complète le formulaire de l'exercice précédent en ajoutant une deuxième question : "Homme ou Femme?" (champ de type Radio). Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
Idem pour les autres tranches d'âge.
Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions. -->

	<a href="formulaire.php">

	<?php 

		$age = $_GET['age']; 
		$genre = $_GET['genre']; 
 
 		if ($age <= 12) {
 			if ($genre == "homme") {
 				echo("Salut petit!");
 			}
 			elseif ($genre == "femme") {
 				echo("Salut petite!");
 			}
 		}
 		if ($age > 12 and $age <= 18) {
 			if ($genre == "homme") {
 				echo("Salut l'adolescent!");
 			}
 			elseif ($genre == "femme") {
 				echo("Salut l'adolescente!");
 			}
 		}
 		if ($age > 18 and $age <= 115) {
 			echo("Salut l'adulte!");
 		}
 		elseif ($age > 115) {
 			if ($genre == "homme") {
 				echo("Wow! Toujours vivant?");
 			}
 			elseif ($genre == "femme") {
 				echo("Wow! Toujours vivante?");
 			}
 		}

	?>