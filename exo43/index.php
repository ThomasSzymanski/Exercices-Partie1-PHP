<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php?nom=Nemare&prenom=Jean">Dis-moi bonjour !</a>
	<?php
		echo $_GET['prenom'] . ' ' . $_GET['nom'];
	?>
</body>
</html>
