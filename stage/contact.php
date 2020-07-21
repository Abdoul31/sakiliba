<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title></title>
	<link rel = "stylesheet", type = "text/css" href = "styless/styless.css">
</head>

<body>
<?php
include("menu.php");
?>
<form method="get" action="#">
	
		<fieldset class="contour">
			<!-- <div class="essai"> -->
			<legend>Contactez nous</legend>
		<!-- <div class="n_p">	 -->
			<center>
		<p class="nom">
			<label for="pseudo">Nom</label>:<br>
			<input type="text" name="nom" id="nom" placeholder="Nom" style="height:40px">
			<br>
		<!-- </div> -->
		<!-- <div class="prenom"> -->
			<label for="prenom">Prenom</label>:<br>
			<input type="text" name="prenom" id="prenom" placeholder="Prenom" autocomplete="on" style="height:40px">
		</p>
		<p class="pass">
			<label for="password">Password</label>:<br>
			<input type="password" id="pass" placeholder="password" autofocus style="height:40px"><br>
		<!-- </div> -->
		<!-- <div class="objet"> -->
			<label for="objet">Objet</label>:<br>
			<input type="text" name="objet" id="objet" placeholder="Objet" required style="height:40px">
		</P>
		<center>
		<div>
		<div class="msg">
			<label for="message">Message</label>:<br/>
			<textarea name="message" id="message" rows="7" cols="50" ></textarea>
		</div>
		<!-- <div class="essai"> -->
	</fieldset>
	<div>
	</form>
	<?php
	include('footer.php');
	?>
</body>
</html>