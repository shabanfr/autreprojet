<?php
require("includes/mysql.php");
$erreur = [];

if(isset($_POST["name"]) || isset($_POST["password"])) {
	@$name = htmlentities($_POST["name"]);
	@$password = htmlentities($_POST["password"]);

	if(empty($name) && empty($password)){
		array_push($erreur,"Veuillez insérer les champs vide !");
	}
	elseif (empty($name)) {
		array_push($erreur,"Veuillez insérer un nom d'utilisateur !");
		$valeur[1] = $_POST["password"];
	}
	elseif(empty($password)){
		array_push($erreur,"veuillez insérer un mot de passe !");
		$valeur[0] = $_POST["name"];
	}
	 else{
		$valeur[0] = $_POST["name"];
		$valeur[1] = $_POST["password"];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Casino: Login</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<div id="login" class="decorbox">
		<h1>{Casino}</h1>
		<?PHP
		if(!empty($erreur)){echo "<div id='erreur'>"; foreach($erreur as $value) {echo "<p>".$value."</p>";}echo "</div>";}?>
		<form method="post" action="">
			<input type="text" name="name" placeholder="Nom d'utilisateur" value="<?=@$valeur[0];?>">
			<input type="password" name="password" placeholder="Mot de passe" value="<?=@$valeur[1];?>">
			<input type="submit">
		</form>
	</div>
</body>
</html>