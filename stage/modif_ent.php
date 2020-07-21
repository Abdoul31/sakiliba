<!DOCTYPE html>
<html>
<head>
<title>Modification de l'adresse d'un propriétaire</title>
</head>
<body>
<?php
// Connexion à MySQL
$dsn = 'mysql: host=localhost; dbname=stage; port=3306; charset=utf8';
$num=$_GET['num'];

try{
			$pdo = new PDO($dsn, 'root', '');
		}
		catch(PDOException $exception){
			mail('pablozy31@gmail.com', 'PDOException', $exception->getMessage());
			exit('erreur de connexion a la de données');

		}

		//REQUETE (query) POUR TESTER LA CONNEXION
		$query = $pdo->query("SELECT * FROM entreprise where numero=".$num);
			$resultat = $query->fetchAll();
			//mMODIFICATION DU FORMULAIRE

// print($resultat[0]['adresse']."\n");
print('<form action="conf_modif.php" method="get">');

print('<label for="numero">Num</label>:');
print('<input type="number" name="numero" value="'.$resultat[0]["numero"].'"><br>');

print('<label for="raison_soc">Raison_s</label>:');
print('<input type="text" name="raison_soc" value="'.$resultat[0]["raison_soc"].'"><br>');

print('<label for="dom_act">Domaine Activité</label>:');
print('<input type="text" name="dom_act" value="'.$resultat[0]["dom_act"].'"><br>');

print('<label for="adresse">Adresse</label>:');
print('<input type="text" name="adresse" value="'.$resultat[0]["adresse"].'"><br>');

print('<label for="ville">Ville</label>:');
print('<input type="text" name="ville" value="'.$resultat[0]["ville"].'"><br>');

print('<label for="telephone">Telephone</label>:');
print('<input type="text" name="telephone" value="'.$resultat[0]["telephone"].'"><br>');

print('<label for="mail">Mail</label>:');
print('<input type="text" name="mail" value="'.$resultat[0]["mail"].'"></br>');

print('<input type = "submit" value = "mis a jour">');
print("</form>");
?>

</body>
</html>