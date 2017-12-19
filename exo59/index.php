<?php
	if(isset($_POST['login']) && isset($_POST['mdp'])){
		setcookie($_POST['login'], $_POST['mdp'], time() + 365*24*3600, null, null, false, true); 
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<label>Login : <input type="text" name="login"/></label>
		<label>Mot de passe : <input type="password" name="mdp"/></label>
		<input type="submit" name="validation"/>
	</form>
</body>
</html>