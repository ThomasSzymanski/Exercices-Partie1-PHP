<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php?dateDebut=2/05/2016&dateFin=27/11/2016">La date de début et de fin ?</a>
	<?php
		if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])){
	    echo 'La date de début est : ' . $_GET['dateDebut'] . ' et celle de fin : ' . $_GET['dateFin'];
	}
	else{
	    echo 'Les dates sont manquantes, désolé !';
	}
	?>
</body>
</html>
