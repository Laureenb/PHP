<!-- Crée un tableau$web_development contenant une clef "frontend" et une clef "backend". À chaque clef, associe un sous-tableau vide.   
ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "xhtml".
ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Ruby on Rails".
ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "CSS".
ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Flash".
ensuite, ajoute une ligne en dessous qui ajoute à la bonne clef la technologie suivante: "Javascript".
ensuite, ajoute une ligne en dessous qui remplace la ligne contenant "xhtml" par "html".
ensuite, ajoute une ligne en dessous qui efface la ligne contenant "Flash".
 -->

<?php


$web_development = array(
	"frontend" => array(),
	"backend" => array()
);

array_push($web_development ["frontend"], "xhtml");
array_push($web_development ["backend"], "Ruby on Rails");
array_push($web_development ["frontend"], "CSS");
array_push($web_development ["frontend"], "Flash");
array_push($web_development ["frontend"], "Javascript");

array_splice($web_development["frontend"], -0, 1, "html");

echo "<pre>";
print_r ($web_development);
echo "<pre>";

unset($web_development["frontend"][array_search("Flash", $web_development["frontend"])]);

echo "<pre>";
print_r ($web_development);
echo "<pre>";


?>
