<?php 

if (isset($_GET['name_enfant'])){
	
$name_enfant = $_GET['name_enfant'];
$name_instit = $_GET['name_instit'];
$genre = $_GET['genre'];
$membre = $_GET['membre'];
$activite = $_GET['activite'];
$raison = $_GET['raison'];
$date = date("d-m-Y"); 

?>

<div class="bloc">
	<div id="container_text">

	<?php

	if($genre == "Madame"){
	echo ("<br/><br/>Chère " .$genre. " " .$name_instit. ",<br/><br/><br/><br/>");
	}
	else{
	echo ("<br/><br/>Cher " .$genre. " " .$name_instit. ",<br/><br/><br/><br/>");
	}

	echo ($name_enfant. " ne pourra pas assister au cours en ce jour du " .$date. ", car ");

	switch ($raison) {
		case ("deces") :
		echo("nous venons de perdre un membre de notre famille; " .$membre. ".<br/><br/><br/><br/>");
		break;
		case ("activite") :
		echo("il y a une séance exceptionnelle de " .$activite. ".<br/><br/><br/><br/>");
		break;
		case ("stranger") :
		echo("la nouvelle saison de Stranger Things vient de sortir.<br/><br/><br/><br/>");
		break;
	}

	if($genre == "Madame"){
	echo("Veuillez agréer, Madame " .$name_instit. ", l’expression de mes salutations distinguées.<br/><br/><br/><br/><br/><br/>");
	}
	else{
	echo("Veuillez agréer, Monsieur " .$name_instit. ", l’expression de mes salutations distinguées.<br/><br/><br/><br/><br/><br/>");
	}

	echo "<div id='sign'>Signature:</div><br/><br/>";

	}

	?>
	
	</div>
	
</div>