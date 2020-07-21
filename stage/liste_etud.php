<!DOCTYPE html>
<html>
<head>
	<title>LISTE DES ETUDIANTS</title>
	<link rel = "stylesheet" type = "text/css" herf = "styless/styles.css">
</head>
<body>


	<?php
	include ("menu.php");

	?>
<div></div>
	<h1 class="ph">La liste des etudiants</h1>
		<center>
		<table>
			<tr>
				<td>Numero</td>
				<td>Nom</td>
				<td>Prenom</td>
				<td>Adresse</td>
				<td>ville</td>
				<td>Telephone</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Docteur</td>
				<td>Momo</td>
				<td> 12 rue Michelet, Paris</td>
				<td>Paris</td>
				<td>06 45 32 56 75</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Lamine</td>
				<td>Seydina</td>
				<td> 15 rue Guynemer</td>
				<td>Juvisy</td>
				<td>06 03 34 30 12</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Abdoul</td>
				<td>Jabbar</td>
				<td> 12 place de la liberte, Paris</td>
				<td>Paris</td>
				<td>06 37 56 33 75</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Jean</td>
				<td>Claude</td>
				<td>1 carrefour du general De Gaulle</td>
				<td>Bonneuil</td>
				<td>07 34 98 12 56</td>
			</tr>
		</table>
	</center>
	<?php
	include('footer.php');
	?>
</body>
</html>