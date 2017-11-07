<!-- 9. La structure "ternaire".

J'imagine que comme moi, vous n'aviez jamais entendu ce mot bizarre: "ternaire". En fait, c'est pas très compliqué: c'est une manière rapide de déterminer la valeur d'une variable en fonction d'une condition.

Exemple: -->

$age = 24;
$majeur = ($age >= 18) ? true : false;

<!-- Ce qui revient à écrire: -->

<?php

$age = 24;
if ($age >= 18){
	$majeur = true;
} 
else {
	$majeur = false;
}

?>