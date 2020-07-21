<!DOCTYPE html>
<html>
<head>
	<title>MODIFICATION ETUDIANT</title>
	<meta charset = "utf-8">
</head>
<body>
	<?php
	//CONNEXION A MYSQL
	$dsn = 'mysql: host=localhost; dbname=stage; port=3306; charset=utf8';
$num=$_GET['num'];
		try
		{
			$pdo = new PDO($dsn, 'root', '');
		}
		//GESTION DES ERREUR
		catch(PDOException $exception){
			//mail('pablozy31@gmail.com', 'PDOException', $exception->getMessage());
			exit('erreur de connexion a la base de donnees');
		}
		//requete pour tester la connexion
		$query = $pdo->query("SELECT * from etudiant WHERE numero=".$num);
		$resultat = $query->fetchAll();
		//formulaire de modification
		print('<form action = "update_etud.php" action = "get">');

			print('<label for = "numero">Numero</label>:');
			print('<input typpe = "number" id = "" name = "numero" value ="'.$resultat[0]["numero"].'">');

			print('<label for = "nom">Nom<label>:');
			print('<input type = "text" id = "" name = "nom" value="'.$resultat[0]["nom"].'"></br>');

			print('<label for = "prenom">Prenom</label>:');
			print('<input type = "text" id = "" name = "prenom" value = "'.$resultat[0]["prenom"].'"></br>');

			print('<label for = "ville">Ville</label>:');
			print('<input type = "text" id = ""name = "ville" value = "'.$resultat[0]["ville"].'"></br>');

			print('<label for = "adresse">Adresse</label>:');
			print('<input type = "text" id ="" name = "adresse" value = "'.$resultat[0]["adresse"].'"></br>');

			print('<label for = "telephone">Telephone</label>:');
			print('<input type = "text" id = "" name = "telephone" value= "'.$resultat[0]["telephone"].'"></br>');

			print('<input type="submit" value="update">');
		print("</form>");

	?>

</body>
</html>