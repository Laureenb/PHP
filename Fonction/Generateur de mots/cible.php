<?php

// Crée un générateur de mots aléatoires, générant deux mots: un allant de 1 à 5 lettres, l'autre allant de 7 à 15 lettres. L'écran ne montrera que ceci: Un titre invitant l'utilisateur à générer un nouveau mot, ensuite: les deux mots générés, ensuite: un bouton permettant de rafraichir la page (et donc de recréer deux mots).

function mot($min, $max){
	//creation du mot long basé sur le tableau
	$characters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q","r", "s", "t", "u", "v", "w", "x", "y", "z");
	//mélange les lettres 
	$lettres_melangées = shuffle($characters);
	//rassemble les éléments du tableau en une chaine
	$desordre = implode($characters);
	//renvoi une valeur aléatoire
    $longueurMot = rand ($min,$max);
    //retourne une partie de la chaine aléatoire, qui commence à la valeur de $desordre 0 (premiere lettre) et a une longueur de $longueur mot
    $mot_final = substr($desordre, 0, $longueurMot); 
    return $mot_final . ' ('.$longueurMot. ' lettres)'; 
}


echo 'mot 1 =' .mot(1,5);
echo "<br>";
echo 'mot 2 =' .mot(7,15);

?>

<br/><br/>
<a href="formulaire.php">
<input type="submit" value="Valider"/>
</a>