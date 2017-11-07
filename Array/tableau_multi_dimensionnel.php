<!-- Décris-toi dans une tableau associatif: $moi. Utilise au moins deux valeurs de chaque type: texte (par exemple prenom), booléenne (par exemple aime_le_foot) et Int (par exemple: age). Imagine que tu doives également stocker tes hobby dans le tableau $moi. -->

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

echo "<pre>";
print_r($moi);
echo "<pre>";

$hobbies_count = count($moi["hobbies"]);
echo $hobbies_count;


// Crée un deuxième tableau similaire au tien, qui décrive ton papa (ou une personne de ta famille): $papa.
// Assure-toi d'y avoir également décrit ses hobbies


$papa = array (
	"prenom" =>"pierre",
	"nationalite" => "français",
	"fan_foot" => true,
	"age" => 65,
	"hobbies" => array ("jardinage", "peinture", "promenade", "voyages")
);

echo "<pre>";
print_r($moi);
echo "<pre>";

$hobbies_count_p = count($papa["hobbies"]);
echo $hobbies_count_p;


// <!-- Ensuite, à ton tableau $moi, ajoute un élément dont la clef est 'papa' et la valeur équivaut à $papa. -->


$moi = array (
	"prenom" => "laureen",
	"nom_famille" => "bataille",
	"travail_php" => true,
	"fan_foot" => false,
	"age" => 33,
	"numero" => 9,
	"hobbies" => array ("peinture", "série", "promenade", "sorties"),
	"papa" => $papa
	);

echo "<pre>";
print_r($moi);
echo "<pre>";


// Tu veux savoir combien de hobbies a ton père. Trouve la fonction PHP qui permette de compter le nombre d'éléments d'un tableau.
// Compte tes propres hobbies
// Additionne les deux et affiche le résultat


$hobby_moi_pap = $hobbies_count + $hobbies_count_p;
echo $hobby_moi_pap;echo"<br/><br/>";


// Un ami t'a fait découvrir les joies de la taxidermie. Trouve la bonne syntaxe pour ajouter le hobby "Taxidermie" à ton tableau de "hobbies".


array_push($moi["hobbies"], "Taxidermie");
echo "<pre>";
print_r($moi);
echo "<pre>";


// Tu te disputes avec ton père et tu décides de changer de nom de famille.
// Ta contestation n'a d'autre objet que de faire chier le système et de faire parler de toi dans les médias. Tu choisis donc de porter le nom de Dieudonné.
// Comment mettre à jour ton tableau pour refléter ce changement de nom de famille?


$moi["nom_famille"] = "Dieudonné";
echo "<pre>";
echo $moi["nom_famille"];
echo "<pre>";


?>