<!-- Un jour, tu rencontres ton $ame_soeur.
Décris-la sous forme d'un Tableau $toi .
Quels seront le ou les hobbies que votre enfant aura?
Il se trouve que tu as vu un documentaire à la télé dans lequel un spécialiste en génétique héréditaire, expliquait qu'il y a 2 possibilités:
    soit l'intersection (les hobby communs aux deux array),
    soit la fusion (tous les hobby de chaque array).
     Devine le nom des 2 fonctions PHP correspondantes dans la documentation de PHP (indice: elles commencent toutes deux par array_) et teste leur syntaxe. Affiche le résultat de chacune via la fonction print_r().
 -->

<?php

$moi = array (
	"prenom" => "laureen",
	"nom_famille" => "bataille",
	"travail_php" => true,
	"fan_foot" => false,
	"age" => 33,
	"numero" => 9,
	"hobbies" => array ("peinture", "série", "promenade", "sorties")
	);

$ame_soeur = array(
	"prenom" => "x",
	"nom_famille" => "y",
	"travail_php" => true,
	"fan_foot" => false,
	"age" => 33,
	"numero" => 9,
	"hobbies" => array ("cinema", "série", "piscine", "sorties")
	);

$communs = array_intersect($moi["hobbies"], $ame_soeur["hobbies"]);
echo "<pre>";
print_r($communs);
echo "<pre>";


$communs = array_merge($moi["hobbies"], $ame_soeur["hobbies"]);
echo "<pre>";
print_r($communs);
echo "<pre>";


?>