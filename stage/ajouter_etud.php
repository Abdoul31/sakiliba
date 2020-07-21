<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<title>Formulaire d'inscription</title>
	<link rel = "stylesheet" type = "text/css" href = "styless/styless.css">
</head>
<body>
<div class="form1">
	<center>
		
		<form method="getS" action="ajout.php">
			<fieldset>
				<legend>Formulaire d'inscription</legend>
		<P>
				<label for="nom">Nom:</label>
			<input type="text" name="nom"><br>
		</p>
		<p>
			<label for="Prenom">Prenom:</label>
			<input type="text" name="prenom"><br>
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
			<select name="entite">faite un choix:
				<option value="etudiant">Etudiant</option>
				<option value="entrprise">Entreprise</option>
			</select>
		</p>
			<p>
			<input type="submit" value="Inscription" name="valider">
			</p>
			</fieldset>
		
		</form>
	
	</center>
</div>

</body>
</html>