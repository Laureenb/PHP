<!-- 
Crée un tableau contenant au moins 10 pays du monde. Une fois fait, utilise une boucle pour générer du html correspondant à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html.
A présent, modifie ton tableau contenant les pays pour qu'il soit un tableau associatif: la clef est le code ISO du pays, la valeur étant le nom du pays: par exemple: $pays = array('BE'=>'Belgique'); au lieu de simplement $pays = array('Belgique');. Utilise la clef pour qu'elle devienne la valeur de la balise option dans ton html.
 -->

 <?php

$monde = array(
	"BE" => "Belgique", 
	"FR" => "France", 
	"IT" => "Italie", 
	"ES" => "Espagne", 
	"CH" => "Chine",
	"JP" => "Japon",
	"MX" => "Mexique", 
	"RU" => "Russie", 
	"CR" => "Croatie", 
	"BU" => "Bulgarie"
);

foreach ($monde as $value) {
	echo "<pre>";
	print_r($value);
	echo "<pre>";
}

 ?>