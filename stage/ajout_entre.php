<?php
$conn=mysqli_connect("localhost", 'root', "","stage");
// mysqli_select_db("stage",$conn);

$raison_soc=$_GET['raison_soc'];
$dom_act=$_GET['dom_act'];
$adresse=$_GET['adresse'];
$ville=$_GET['ville'];
$telephone=$_GET['telephone'];
$mail=$_GET['mail'];
$sql="INSERT into entreprise VALUES(0,'$raison_soc','$dom_act','$adresse','$ville','$telephone',
'$mail')";
echo $sql;
// mysqli_query($sql);
$resultat = mysqli_query($conn, $sql);
// print($resultat);
?>