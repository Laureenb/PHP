<!-- 0. Représente en code le fait de devoir ranger sa chambre si elle est sale.
Astuce: Initialise une variable booléenne $chambre_est_sale puis teste là dans une condition. Si elle est vraie, affiche "Range ta chambre, on dirait la cage d'un bonobo!". Sinon, affiche "Ta chambre est trop propre, vis un peu!".  
Fait? Bravo. A présent, modifie ton script pour représenter plutôt comment tes parents s'exprimeraient.
Ensuite, rendons le script un peu plus subtil en permettant une gradation. Ta chambre pourrait être soit "dégoutante", "sale", "en ordre", "immaculée", "maniaque". Utilise une structure if/ elseif / else pour cela. Invente les messages à afficher en fonction de chaque cas de figure.   -->

<?php

	$chambre_est_sale = false;

	if($chambre_est_sale == true){
		echo "Range ta chambre, on dirait la cage d'un bonobo!";
	}
	elseif($chambre_est_sale != false){
		echo "Ta chambre est dégoutante";
	}
	elseif($chambre_est_sale == true ){
		echo "Ta chambre est sale";
	}
	elseif($chambre_est_sale == false){
		echo "Ta chambre est trop propre, vis un peu!";
	}
	elseif($chambre_est_sale === false){
		echo "Ta chambre est immaculée!";
	}

?>