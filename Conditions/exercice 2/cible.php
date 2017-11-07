<!-- 2. Affiche une salutation différente selon l'âge de l'utilisateur.

Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number).
Méthode: GET Affiche un message différent selon la réponse au formulaire.

    Si l'âge est inférieur à 12 ans, affiche "Salut petit!"
    Si l'âge est entre 12 et 18 ans, affiche "Salut l'ado!"
    Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!"
    Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?"
 -->

	<a href="formulaire.php">

	<?php 

		$age = $_GET['age']; 
 
 		if ($age <= 12) {
 			echo("Salut petit!");
 		}
 		if ($age > 12 and $age <= 18) {
 			echo("Salut l'ado!");
 		}
 		if ($age > 18 and $age <= 115) {
 			echo("Salut l'adulte!");
 		}
 		elseif ($age > 115) {
 			echo("Wow! Toujours vivant?");
 		}

	?>