<!DOCTYPE html>
<html>
<head>
	<title>LISTE DES ENTRPRISES</title>
	<link rel = "stylesheet" type = "text/css" href = "styless/styless.css">
</head>
<body>
	
<?php
include ("menu.php");
	// include ("menu.php");
		
		//CREATION DE DSN PARAMETRE DE CONNEXION
		$dsn = 'mysql: host=localhost; dbname=stage; port=3306; charset=utf8';
		//TEST ET CREATION DE LA CONNEXION AVEC PDO
		try{
			$pdo = new PDO($dsn, 'root', '');
		}
		catch(PDOException $exception){
			mail('pablozy31@gmail.com', 'PDOException', $exception->getMessage());
			exit('erreur de connexion a la de données');

		}

		//REQUETE (query) POUR TESTER LA CONNEXION
		$query = $pdo->query("SELECT * FROM `entreprise`");
			$resultat = $query->fetchAll();

			//AFFICHAGE DU RESULTAT DANS UN TABLEAU
			if (isset($_GET['Modifier'])){

		}
			print ("<table border=\"2\">");
			
				foreach ($resultat as $key => $variable){
					print ("<center>");
					print("<tr>");

					print("<td>" . $resultat[$key]['numero'] . "</td>");
					print("<td>" . $resultat[$key]['raison_soc'] . "</td>");
					print("<td>" . $resultat[$key]['dom_act'] . "</td>");
					print("<td>" . $resultat[$key]['adresse'] . "</td>");
					print("<td>" . $resultat[$key]['ville'] . "</td>");
					print("<td>" . $resultat[$key]['telephone'] . "</td>");
					print("<td>" . $resultat[$key]['mail'] . "</td>");
					// print("<td><a href=modif_ent.php?num=".$resultat[$key]['numero'].">Modifier</a></td>");

					print("</tr>");
					print("<center>");
				}
?>
<?php
include('footer.php');
?>
	
</body>
</html>
