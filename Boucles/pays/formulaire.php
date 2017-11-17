<!-- 
Crée un tableau contenant au moins 10 pays du monde. Une fois fait, utilise une boucle pour générer du html correspondant à une selectbox permettant à un utilisateur d'indiquer son pays dans un formulaire html.
A présent, modifie ton tableau contenant les pays pour qu'il soit un tableau associatif: la clef est le code ISO du pays, la valeur étant le nom du pays: par exemple: $pays = array('BE'=>'Belgique'); au lieu de simplement $pays = array('Belgique');. Utilise la clef pour qu'elle devienne la valeur de la balise option dans ton html.
 -->

<label for="age_utilisateur">Quel est votre pays ?</label>

<form action="pays.php" method="get">

<p>

<select id="select">
	<option value="valeur">BE</option> 
	<option value="valeur">FR</option>
	<option value="valeur">IT</option>
	<option value="valeur">ES</option> 
	<option value="valeur">CH</option>
	<option value="valeur">JP</option>
	<option value="valeur">MX</option> 
	<option value="valeur">RU</option>
	<option value="valeur">CR</option>
	<option value="valeur">BU</option><br/>
</select>

    <input type="submit" value="Valider" />
</p>

</form>