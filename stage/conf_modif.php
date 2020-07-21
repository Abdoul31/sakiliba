<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		//connexion 
		// $sdn = 'mysql:host=localhost; dbname=stage; port=3306; charset=utf-8';
		$connection=mysqli_connect("localhost", "root","", "stage" );
		//declaration des variables
		$num=$_GET['numero'];
		$raison_soc=$_GET['raison_soc'];
		$dom_act=$_GET['dom_act'];
		$adresse=$_GET['adresse'];
		$ville=$_GET['ville'];
		$telephone=$_GET['telephone'];
		$mail=$_GET['mail'];
//print($num." ".$raison_soc." ".$dom_act." ".$adresse." ".$ville." ".$telephone." ".$mail);
		//mise a jour 
		$modif_ent = "UPDATE entreprise SET
		raison_soc='$raison_soc',
		dom_act='$dom_act',
		adresse='$adresse',
		ville='$ville',
		telephone='$telephone',
		mail='$mail' where numero=$num";



		$resultat=mysqli_query($connection, $modif_ent);
		print("Modification effectuée avec succès");
		?>
	</body>
</html>