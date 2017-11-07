<!-- 7. Écrire une expression conditionnelle...

... utilisant les variables $age et $sexe dans une instruction if/else pour sélectionner une personne de sexe féminin dont l’age est compris entre 21 et 40 ans et afficher un message de bienvenue approprié.

    Message si OK: "Bonjour, bienvenue parmi nous!"
    Message si KO: "Désolé, vous ne remplissez pas les critères de sélection."
 -->

<?php

 $age = 13;
 $genre = "feminin";

 if ($age > 21  and $age <= 40 and $genre == "feminin"){
 	echo "Bonjour, bienvenue parmi nous!";
 }
 else {
 	echo "Désolé, vous ne remplissez pas les critères de sélection.";
 }


?>