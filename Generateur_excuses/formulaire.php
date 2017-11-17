<!-- 
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
     UX soignée: en faire un vrai produit? ( CSS + typographie + logo ) 
 -->

<form action="excuse.php" method="get">

	<label for="name_enfant">Nom de votre enfant :</label>
	<input type="text" name="name_enfant" id="name_enfant"/><br/><br/>

	<label for="name_instit">Nom de l'institutrice :</label>
	<input type="text" name="name_instit" id="name_instit"/><br/><br/>

	<label for="raison">Raison de l'absence : </label><br/>
	<input type="radio" name="raison" value="deces"/>Décès de l'animal de compagnie (ou d'un membre de la famille)<br/>
	<input type="radio" name="raison" value="activite"/>Activité extra-scolaire importante<br/>
	<input type="radio" name="raison" value="stranger"/>Stranger Things passe à la télé<br/><br/>

    <input type="submit" value="Valider"/>

</form>

<?php

$enfant = $



?>