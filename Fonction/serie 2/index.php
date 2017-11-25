<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title></title>
</head>
<body>

<?php

// Crée une fonction te permettant de gérer des messages envers l'utilisateur grâce à deux arguments: le premier argument est le message, le second permet de spécifier un attribut de classe html qui sera utilisée par le CSS (par exemple: "info", "error", "warning"). Grâce à cette fonction, on pourra écrire en php:
// echo feedback("adresse email incorrecte", "warning");
// ce qui provoquera cette injection d'html:
// <div class="warning">Adresse email incorrecte.</div>

// On crée la fonction 

function afficher_classe($message, $classe){
	echo ('<div class ="'.$classe.'">'.$message.'</div>');
}

// On déclare les variables des différents types de messages

afficher_classe('Ceci est un message d\'info', 'info');
afficher_classe('Ceci est un message alerte', 'alert');
afficher_classe('Ceci est un message d\'erreur', 'error'); 
    
// Trouve par toi-même dans la documentation php comment modifier ta fonction pour que, si le second argument n'est pas spécifié, sa valeur soit égale à "info".

function affiche_class ($message, $class="info"){
echo '<div class ="' . $class . '">' . $message . '</div>';
}

affiche_class('Ceci est un message d\'info', 'info');
affiche_class('Ceci est un message alerte', 'alert');
affiche_class('Ceci est un message erreur', 'error');
affiche_class('Ceci est un message dont le paramètre class'//pas de classe
);

?>

</body>
</html>