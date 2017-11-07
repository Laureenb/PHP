<!-- PHP Exercice
Dans un fichier "excuse.php", crée un "générateur d'excuses" pour faciliter la vie des parents d'enfants en école primaire.
Il te faut un formulaire avec trois questions:
    nom de l'enfant
    nom de l'institutrice
    une raison de l'absence à choisir parmi des options (input de type "radio"):
        maladie
        décès de l'animal de compagnie (ou d'un membre de la famille)
        activité extra-scolaire importante
        toute autre excuse de ton choix
Pour chaque option, invente une excuse adaptée en fonction de l'option choisie. Utilise une condition pour afficher la bonne excuse.
Génère le mot d'excuse utilisant les trois réponses au formulaire.
Le parent n'aura plus qu'à copier-coller la réponse pour rédiger sa lettre d'excuses.
Critères de perfectionnement
    ajoute la date du jour (format "Day, le dd Month YYYY")
    ajoute la formule de politesse.
    pas de faute d'orthographe.
    UX soignée: en faire un vrai produit? ( CSS + typographie + logo ) -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="style.css">
	<title>Le mot d'excuse</title>
</head>
<body>

	<form action="index.php" method="get">

	<label for="name_enfant">Nom de votre enfant?</label>
	<input type="text" name="name_enfant" id="name_enfant"/><br/><br/>

	<label for="name_instit">Nom de l'institutrice?</label>
	<input type="text" name="name_instit" id="name_instit"/><br/><br/>

	<label for="genre">Quel est votre genre?</label><br/>
	<input type="radio" name="genre" value="femme"/>Feminin<br/>
	<input type="radio" name="genre" value="homme"/>Masculin<br/><br/>

	<label for="raison">Raison de l'absence : </label><br/>
	<input type="radio" name="raison" value="deces"/>Décès de l'animal de compagnie (ou d'un membre de la famille)<br/>
	<input type="radio" name="raison" value="activite"/>Activité extra-scolaire importante<br/>
	<input type="radio" name="raison" value="stranger"/>Stranger Things passe à la télé<br/><br/>

    <input type="submit" value="Valider"/>

	</form>


	<div id="cadre">
		

		<?php 

			$name_enfant = $_GET['name_enfant'];
			$name_instit = $_GET['name_instit'];
			$genre = $_GET['genre'];
		    $raison = $_GET['raison'];
		    $membre = $_GET['membre']
		    $date = $_GET[date("d-m-Y")]; 


		    echo ($genre. $name_instit.);
		    echo ($name_enfant. "ne pourra pas assister au cours en ce jour" $date. "car");
		    
			 
	 		switch ($raison) {
			case ("deces") :
				echo("nous venons de perdre un membre de notre famille," $membre.);
				break;
			case ("activite") :
				echo("il y a une séance exceptionnelle", );
				break;
			case ("stranger") :
				echo("la nouvelle saison de Stranger Things vient de sortir");
				break;
		}

	 		}

		?>


	</div>

</body>
</html>

