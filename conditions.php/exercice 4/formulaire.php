<!-- 4. Affiche une salutation différente selon l'âge, le genre de l'utilisateur et sa langue maternelle.

Complète le formulaire de l'exercice précédent en ajoutant une troisième question : "Parles-tu anglais?" (champ de type Radio: réponses possibles: "yes" ou "non" ). Adapte le traitement du formulaire en fonction:

    Si l'âge est inférieur à 12 ans et que l'utilisateur répond "yes", retourne: "Hello boy!" ou "Hello Girl!" selon son genre.
    Si l'âge est entre 12 et 18 ans et que l'utilisateur répond "yes", affiche "Hello Teenage boy!" ou "Hello Teenage girl!" selon son genre.
    Si l'âge est entre 18 et 115 ans et que l'utilisateur répond "yes", affiche "Hello Sir!" ou "Hello Lady!" selon son genre. - Si l'âge est supérieur à 115 ans et que l'utilisateur répond "yes", affiche "Wow! Still alive, old man?" ou "old lady?" selon son genre.
 -->

 <form action="cible.php" method="get">

	<label for="age">Quel est votre âge?</label>
	<input type="number" name="age" id="age"/><br/><br/>

    <label for="genre">Quel est votre genre?</label><br/>
	<input type="radio" name="genre" value="femme"/>Feminin<br/>
	<input type="radio" name="genre" value="homme"/>Masculin<br/><br/>

	<label for="en">Parles-tu anglais?</label><br/>
	<input type="radio" name="en" value="yes"/>yes<br/>
	<input type="radio" name="en" value="no"/>no<br/><br/>

    <input type="submit" value="Valider" />

</form>