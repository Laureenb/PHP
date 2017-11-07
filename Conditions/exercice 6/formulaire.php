<!-- 6. La structure "Switch".

Dans le switch, on indique au début sur quelle variable on travaille. On dit à PHP : Je vais analyser la valeur de $note. Après, on utilise des case pour analyser chaque cas (case 0,case 10, etc.). Cela signifie : Dans le cas où la valeur est 0… Dans le cas où la valeur est 10…

Avantage : on n'a plus besoin de mettre le double égal ! Défaut : ça ne marche pas avec les autres symboles (< > <= >= !=). En clair, le switch ne peut tester que l'égalité.
 -->

<form action="cible.php" method="get">

	<label for="note">Quel est votre note?</label>
	<input type="number" name="note" id="note"/><br/>

    <input type="submit" value="Valider" />

</form>