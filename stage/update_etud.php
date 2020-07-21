<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title></title>
</head>
<body>

	<?php
		//connction a la base
			$connection=mysqli_connect("localhost", "root","", "stage" );

		//reécriture des variable
	$numero=$_GET['numero'];
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$ville=$_GET['ville'];
	$adresse=$_GET['adresse'];
	$telephone=$_GET['telephone'];
		//update
	$update_etud= "UPDATE etudiant SET
	nom='$nom',
	prenom='$prenom',
	ville='$ville',
	adresse='$adresse',
	telephone='$telephone'
	WHERE numero=$numero";

	$resultat=mysqli_query($connection, $update_etud);
	print ('Les modification ont été pris en compte!!');

	?>
</body>
</html>