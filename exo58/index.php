<?php
	session_start();

		$_SESSION['nom'] = 'Szymanski';
		$_SESSION['prenom'] = 'Thomas';
		$_SESSION['age'] = 21;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="user.php">Voir mes coordonnées</a>
</body>
</html>