<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>STAGE PHP/MYSQL</title>
				 <link rel ="stylesheet" type= "text/css" href="styless/styless.css">
		<link content="width=device-width, initial-scale=1">
		 <script src='https://kit.fontawesome.com/a076d05399.js'></script>

	</head>
	<body>
		<div class="identif"><a href="identif.php">s'identifier<a> | <a>s'inscrire</a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li class="entrep"><a href="entreprise.php">Entreprise</a>
					<ul class="sumenu">
						<li><a href="liste_entre.php">Liste des entreprises</a></li>
						<li><a href="ajouter_entre.php">Ajouter une entreprise</a></li>
					</ul>
				</li>
				<li class="etud"><a href="liste_etud.php">Liste Des Etudiants</a>
					<ul class="sumenu">
						<li><a href="liste_etud.php">Liste des etudiants</a></li>
						<li><a href="ajouter_etud.php">Ajouter un etudiant</a></li>
					</ul>
				</li>
				<li class="stage"><a href="stages.php">Stage</a>
					<ul class="sumenu">
						<li><a href="liste_stages.php">liste des stages</a></li>
						<li><a href="stages_aff.php">Stages affectés</a></li>
						<li><a herf="stages_n_aff.php">stages non affectes</a></li>
					</ul>
				</li>
					<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	

		<?php
	// 		// include ("menu.php");
		
	// 	//CREATION DE DSN PARAMETRE DE CONNEXION
	// 	$dsn = 'mysql: host=localhost; dbname=stage; port=3306; charset=utf8';
	// 	//TEST ET CREATION DE LA CONNEXION AVEC PDO
	// 	try{
	// 		$pdo = new PDO($dsn, 'root', '');
	// 	}
	// 	catch(PDOException $exception){
	// 		mail('pablozy31@gmail.com', 'PDOException', $exception->getMessage());
	// 		exit('erreur de connexion a la de données');

	// 	}

	// 	//REQUETE (query) POUR TESTER LA CONNEXION
	// 	$query = $pdo->query("SELECT * FROM `entreprise`");
	// 		$resultat = $query->fetchAll();

	// 		//AFFICHAGE DU RESULTAT DANS UN TABLEAU
	// 		if (isset($_GET['Modifier'])){

	// 	}
	// 		print ("<table border=\"2\">");
			
	// 			foreach ($resultat as $key => $variable){

	// 				print("<tr>");

	// 				print("<td>" . $resultat[$key]['numero'] . "</td>");
	// 				print("<td>" . $resultat[$key]['raison_soc'] . "</td>");
	// 				print("<td>" . $resultat[$key]['dom_act'] . "</td>");
	// 				print("<td>" . $resultat[$key]['adresse'] . "</td>");
	// 				print("<td>" . $resultat[$key]['ville'] . "</td>");
	// 				print("<td>" . $resultat[$key]['telephone'] . "</td>");
	// 				print("<td>" . $resultat[$key]['mail'] . "</td>");
	// 				print("<td><a href=modif_ent.php?num=".$resultat[$key]['numero'].">Modifier</a></td>");

	// 				print("</tr>");
	// 			}
	// 			$query=$pdo->query('SELECT * FROM `etudiant`');
	// 			$resultat=$query->fetchAll();

	// 				print("<table border=\"1\">");
	// 		foreach ($resultat as $key => $variable){
	// 		print("<tr>");
	// 		print("<td>" . $resultat[$key]['numero'] . "</td>");
	// 		print("<td>" . $resultat[$key]['nom'] . "</td>");
	// 		print("<td>" . $resultat[$key]['prenom'] . "</td>");
	// 		print("<td>" . $resultat[$key]['adresse'] . "</td>");
	// 		print("<td>" . $resultat[$key]['ville'] . "</td>");
	// 		print("<td>" . $resultat[$key]['telephone'] . "</td>");
	// 		print("<td><a href=modif_etud.php?num=".$resultat[$key]['numero'].">Modifier</a></td>"); 
	// 		print("</tr>");
	// }	
	// 	print("</table>");
	// 			print("</table>");

		?>
		
	</form>
	<footer class="pied">
	<nav class="foot">
		<!-- <div class="table"> -->
		<ul class="line">
			<li class="prop">A PROPOS 
				<p>Stage de fin de d'année<br/>
				a l'ecole ELITECH de Monrouge</p>

			</li>
			<li>LIENS RAPIDES
					<p>ESPACE ETUDIANT</p>
					<p>ESPACE ENTREPRISE</p>
					<p>NOUS-CONTACTER</p>

			</li>
			<li>CONTACTER NOUS
				<address>24 rue des fossées<br>Paris 75001</address>
				<i class='fas fa-phone-square' style='font-size:15px'>01 23 12 45 96</i><br>
				<i class='fas fa-envelope' style='font-size:15px'>exemple@gmail.com</i>
			</li>

			<li>RESEAUX SOCIAUX
				<p>
				<!--Facebook-->
			<a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
			<!--Twitter-->
			<a class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
			<!--Google +-->
			<a class="btn-floating btn-lg btn-gplus" style='size:15px' type="button" role="button"><i class="fab fa-google-plus-g"></i></a>
			<!--Linkedin-->
			<a class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
		</p>
			</li>		
		</ul>
	<!-- </div> -->
	</nav>
</footer>
<footer>Copyright <?php
		echo date('y');
		?></footer>
	</body>
</html>
