	<?php
	$connect=mysqli_connect("localhost","root","", "stage");
	// mysql_select_db("stage",$connect);
	$connect=mysqli_connect("localhost", "root","", "stage");
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$adresse=$_GET['adresse'];
	$ville=$_GET['ville'];
	$telephone=$_GET['telephone'];

	$sql="INSERT INTO etudiant VALUES(0,'$nom','$prenom','$adresse','$ville','$telephone')";
	echo ($sql);
	// mysql_query($sql);
	
$resultat=mysqli_query($connect, $sql);
print($resultat);
// header("location=ajouter_etud.php");
	       //       $conn = mysqli_connect("localhost","root","","stage" );
        // if($conn-> connect_error){
        //    die("Connection failed:".$conn-> connect_error);
        // }
        //         $sql = "INSERT into id, username, password from login";
        //         $result = $conn-> query($sql);
        // if($result -> num_rows > 0 ){
        //     while($row = $result-> fetch_assoc()){
        //         echo "<tr><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["adresse"].
        //         "</td></tr>"."<td><td>".$row["ville"]."<td><td>".$row["telephone"];
        //     }
        //       echo "</table>";
        //         }
      
        //         else{
        //     echo "0 result" ;
        // }
        // $conn-> close();
// 	?>