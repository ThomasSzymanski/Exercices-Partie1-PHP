<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php?nom=Nemare&prenom=Jean">Dis-moi bonjour !</a>
	<?php
		if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])){
	    echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' ' . $_GET['age'] . ' ans !';
	}
	else{
	    echo 'Nous n\'avons pas votre âge mon cher ami !';
	}
	?>
</body>
</html>
