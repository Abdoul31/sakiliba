<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<title>Formulaire d'inscription</title>
	<link rel = "stylesheet" type = "text/css" href = "styless/styless.css">
</head>
<body>
<div>
	<center>
		
		<form method="get" action="ajout_entre.php">
			<fieldset>
				<legend>Nouvelle Entrprise</legend>
		<P>
				<label for="raison_soc">Raison-Sociale:</label>
			<input type="text" name="raison_soc"><br>
		</p>
		<p>
			<label for="dom_act">Domaine-D'activite:</label>
			<input type="text" name="dom_act"><br>
		</p>
		<p>
			<label for="adresse">Adresse:</label>
			<input type="text" name="adresse"><br>
		</p>
		<p>	
			<label for="ville">Ville:</label>
			<input type="text" name="ville"><br>
		</p>
		<P>	
			<label for="telephone">Telephone:</label>
			<input type="text" name="telephone"><br>
		</P>
		<p>
			<label for="mail">Mail:</label>
			<input type="mail" name="mail"><br>
		</p>
		<p>
			<label for="">:</label>
			<input type="" name=""><br>
		</p>
			<p>
			<input type="submit" value="valider" name="valider">
			</p>
			</fieldset>
		</form>
	
	</center>
</div>
<?php
include('footer.php');
?>
</body>
</html>