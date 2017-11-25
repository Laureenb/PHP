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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito:300" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
    <title>Générateur d'excuses pour les parents</title>
</head>
<body>

    <h1>Générateur d'excuse</h1>

    <h3>Remplissez-les champs pour générer votre excuses</h3>

<div id="container_form">

    <form action="index.php" method="get">

    	<label for="name_enfant">Nom de votre enfant :</label>
    	<input type="text" name="name_enfant" id="name_enfant"/><br/><br/>

    	<label for="name_instit">Nom de l'institutrice/teur :</label>
    	<input type="text" name="name_instit" id="name_instit"/><br/>
        <input type="radio" name="genre" value="Madame"/>Madame
        <input type="radio" name="genre" value="Monsieur"/>Monsieur<br/><br/>

    	<label for="raison">Raison de l'absence : </label><br/>
    	<input type="radio" name="raison" value="deces"/>Décès de l'animal de compagnie (ou d'un membre de la famille)<br/>
        <label for="name_instit">Membre :</label>
        <input type="text" name="membre" id="membre"/><br/>
    	<input type="radio" name="raison" value="activite"/>Activité extra-scolaire importante<br/>
         <label for="name_instit">Activité :</label>
        <input type="text" name="activite" id="activite"/><br/>
    	<input type="radio" name="raison" value="stranger"/>Stranger Things passe à la télé<br/><br/>

        <input type="submit" value="Valider" id="button"/><br/><br/><br/>

    </form>

</div>

<?php

include('excuse.php');

?>

</body>
</html>