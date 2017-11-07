<!-- 3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.

Complète le formulaire de l'exercice précédent en ajoutant une deuxième question : "Homme ou Femme?" (champ de type Radio). Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin.
Par exemple, si l'âge est entre 12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!".
Idem pour les autres tranches d'âge.
Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions. -->

<form action="cible.php" method="get">

	<label for="age">Quel est votre âge?</label>
	<input type="number" name="age" id="age"/><br/><br/>

    <label for="genre">Quel est votre genre?</label><br/>
	<input type="radio" name="genre" value="femme"/>Feminin<br/>
	<input type="radio" name="genre" value="homme"/>Masculin<br/><br/>

    <input type="submit" value="Valider" />

</form>