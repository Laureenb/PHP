<!--     Dans ton nouveau boulot, tu récupères du code du développeur précédent:

// Calcul du volume d'un cône de rayon 5 et de hauteur 2  
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';  
// Calcul du volume d'un cône de rayon 3 et de hauteur 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';  

WOA! Une répétition! Ton subsconscient aussitôt crie DRY! DRY! DRY!
Afin qu'il te laisse tranquille, crée une fonction volume_dun_cone, qui va calculer le volume du cône en fonction du rayon et de la hauteur. Cette fonction ne va rien afficher, on veut juste qu'elle nous renvoie le volume qu'on cherche. Voici un schéma, pour bien t'embrouiller (Ben oui, en réalité, les informations utiles à cette mission sont dans le code ci-dessus...)
Cone

    Plus d'exercices sur les fonctions ici.

Exercice #godmode #walloniequandtunoustiens

    Invente une fonction reverse_string( $stringToReverse) qui réécrit une chaine de caractères à l'envers.
    En Wallonie, les mouvements de jeunesse ont une chanson populaire intitulée "Buvons un coup ma serpette est perdue". Utilise la fonction str_replace avec $substitutions = array( E, I, O, U, OU, É, È, OI, UI, OUI, AN, IN, ON, UN, OIN); pour transformer automatiquement les voyelles du couplet selon chaque élément de l'array et ainsi générer les paroles complètes de la chanson (le couplet avec chaque diphtongue remplacée).
 -->