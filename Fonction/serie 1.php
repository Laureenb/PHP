<?php

// Utilise une fonction qui mette la première lettre de l'argument en majuscule. Par ex: si l'input de la fonction est "emile", l'output sera "Emile".

$nom = "emilie";
	echo ucfirst ($nom . "<br/>");

// Utilise la fonction fournie par PHP te permettant d'afficher l'année en cours.

echo date('Y');
echo "<br/>";

// Affiche à présent la date, l'heure, les minutes et les secondes, en utilisant la même fonction.

echo date('Y-m-d H:i:s');
echo "<br/>";

// Crée une fonction prenant deux arguments numériques et qui retourne la somme de ces deux arguments.

$a = 2;
$b = 3;
function numerique($a, $b){
	$result = $a + $b ;
	return $result;
}
echo numerique($a, $b);
echo "<br/>";

// Améliore la fonction précédente pour que si l'un des (ou les deux) arguments envoyés n'est pas une valeur numérique (int), la fonction retourne le message suivant: "Erreur, argument non numérique".

$a = 2;
$b = 3;
function nume($a, $b){
	if (is_int($a) and is_int($b)) {
		$result = $a + $b ;
		return $result;
	}
	else {
		echo "Erreur, argument non numérique";
	}
}
echo nume($a, $b);
echo "<br/>";

// Crée une fonction qui prend en argument une chaîne de caractères (plusieurs mots) et qui retourne les initiales de chaque mot en majuscule. (Exemple: "In code we trust!" devient: ICWT).

$phrase = "we love php";
$mots = explode(" ", $phrase);
foreach ($mots as $value) {
	echo strtoupper($value[0]);
}
echo "<br/>";

// Invente une fonction qui remplace les lettres "a" et "e" par le caractère "æ" dans chacune des chaînes suivantes: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca".

$chaine=["caecotrophie, chaenichthys, microsphaera, sphaerotheca"];
$chaine2=[];
$chaine3=[];

foreach ($chaine as $value) {
$value=str_replace("ae","æ",$chaine[0]);
array_push($chaine2,$value);
echo "<pre>";
print_r($chaine2);
echo "<pre>";

// Crée la fonction inverse, qui remplace le caractère "æ" par "ae" dans les chaines suivantes: cæcotrophie, chænichthys, microsphæra, sphærotheca

	foreach ($chaine2 as $value) {
	$value=str_replace("æ","ae",$chaine2[0]);
	array_push($chaine3,$value);
	echo "<pre>";
	print_r($chaine3);
	echo "<pre>";
	}
}

// Convertis la chaîne suivante: "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!" en lettres minuscules.

$parle = "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";
$parle_min = mb_strtolower($parle);
echo $parle_min;

?>