<?php


//Voici un array:
$pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' ); 

//Que va retourner ceci ?

 echo $pays[2];
 // Allemagne


//Crée un array représentant ta famille.
//Affiche son contenu avec la fonction print_r 

$famille = ["Pierre", "Chantal", "Pascale", "Charles"];

echo "<pre>"; 
print_r($famille);
echo "<pre>"; 


// Crée un array décrivant tes plats préférés.
// Affiche son contenu avec la fonction print_r 

$plat = ["pâtes", "asiatique", "indien", "mexicain"];

echo "<pre>";
print_r($plat);
echo "<pre>";


// Crée un array listant tes films et séries préférés.
// En utilisant cet array, affiche uniquement ton film/série préféré 


$tele = ["le Seigneur des anneaux", "Black Mirror", "5ème Element", "Stranger Things"];

print_r($tele[3]);
$tele = ["le Seigneur des anneaux", "Black Mirror", "5ème Element", "Stranger Things"];

print_r($tele[3]);



 ?>