<?php
	$conn=mysqli_connect("localhost", "root","", "stage");

    $liste = "SELECT * FROM liste_entreprise";
    $lresultat=mysqli_query($conn, $liste);
	
	$log=$_GET['login'];
	echo $log;
	$pass=$_GET['password'];
	echo $pass;
    $lchoix=$_GET['choix'];
    // $liste=$_GET['categories'];
    // $radio=$_GET['choix'];
    // $liste=$_GET['choix'];
	// $id_entre=$_GET['id_entreprise'];DECLARER EN NULL DES VALEUR NON OBLIGATOIRE 
	// echo $id_entre;
	// $id_etud=$_GET['id_etudiant'];DECLARER EN NULL DES VALEUR NON OBLIGATOIRE
	// echo $id_etud;
	
$sql="INSERT INTO utilisateur(login,password,choix) VALUES('$log', '$pass', $lchoix)";
if (mysqli_query($conn, $sql)) {
    echo "Nouvelles donnees creer";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$resultat = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<!-- <!DOCTYPE html>
<html>
    <head>
       <title>Table avec donnee</title>
    </head>
    <body>
        <select name="categries">
                    <?php while ($row=msqli_fetch_array($liste))?>
                    <option value="<?php echo $row[0];?>"><?php echo $row[1]; ?></option>   
                </select> -->
   <!--  <table>
       <tr>
                  <th>id</th>
        <th>Username</th>
        <th>Password</th>
       </tr> -->

  <!--   //             $conn = mysqli_connect("localhost","root","","stage" );
    //     if($conn-> connect_error()){
    //        die("Connection failed:".$conn-> connect_error());
    //     }
    //             $sql = "SELECT id, login, password from utilisateur";
    //             $result = $conn-> query($sql);
    //     if($result -> num_rows > 0){
    //         while($row = $result-> fetch_assoc()){
    //             echo "<tr><td>".$row["id"]."</td><td>".$row["login"]."<td></tr>".$row["password"]."</td></tr>";
    //         }
    //     echo "</table>";
    // }

    //             else{
    //         echo "0 result";
    //     }
    //     $conn-> close(); -->
</body>