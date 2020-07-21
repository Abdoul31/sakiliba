

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>STAGE PHP/MYSQL</title>
		<link rel ="stylesheet" type= "text/css" href="styless/styless.css">
		<link content="width=device-width, initial-scale=1">
		 
		 <script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<section>
		<form method="get" action="valider_identif.php">
			<div class="form">
				<p>IDENTIFICATION</p>
			<p>
			<!-- <label for="login">LOGIN:</label> -->
			<input type="text" id="name" name="login" placeholder="put your login"  style="height:35px" required>
		</p>
		<p>
			<!-- <label for="password">PASSWORD:</label> -->
			<input type="password" id="password" name="password" placeholder="your password"  style="height:35px" required>
			</p>
			<p>
					<label for=entreprise>Entreprise :</label>
				<input type="radio" name="choix" value="id_entreprise" id="choix">
					<label for="etudiant">Etudiant :</label>
				<input type="radio" name="choix" value="id_etudiant" id="choix"> 
				
			</p>
			<p>
			

	<?php
	$dsn = 'mysql: host=localhost; dbname=stage; port=3306; charset=utf8';
		//TEST ET CREATION DE LA CONNEXION AVEC PDO
		try{
			$pdo = new PDO($dsn, 'root', '');
		}
		catch(PDOException $exception){
			mail('pablozy31@gmail.com', 'PDOException', $exception->getMessage());
			exit('erreur de connexion a la de données');

		}
	$conn=mysqli_connect("localhost", "root","", "stage");

	$requete = $pdo->query("SELECT FROM entreprise WHERE raison_soc");
		?><select name="cat" style="margin-right: 5px">faite un choix:
		<option name="raison_soc" value="petrolem sas">Petrolem</option>
			<option name="raison_soc" value="dinner">Dinner</option>
				<option name="raison_soc" value="technineten">technineten</option>
					<option name="raison_soc" value="fast">Fast</option>
						
			<?php
	while ($donnees = $requete->fetch()){ ?>
	

	<select>
					
	<?php }

				?>
	</p>
		<p>
				<!-- <select> -->
					<?php
					$conn = mysqli_connect("localhost", "root", "", "stage");

					$requete = $pdo->query("SELECT FROM etudiant WHERE nom");
			
						echo '<select>
						<option name="nom" value="docteur">Docteur</option>
			<option name="nom" value="lamine">Lamine</option>
				<option name="nom" value="abdoul">Abdoul</option>
					<option name="nom" value="jean">Jean</option>
						<option name="nom" value="kalifa">Kalifa</option>
							<option name="nom" value="maou">Maou
							</option>';						

					while ($donnees = $requete->fetch()){ 
						echo '<option>'.$donnees['raison_soc']. '</option>';
					}
					echo '</select>';
					?>
								
				</p>
			<input type="submit" name="envoyer">
				<!-- </select> -->	
		</div>
		</form>

</section>