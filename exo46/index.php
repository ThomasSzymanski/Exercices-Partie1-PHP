<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php?langage=PHP&serveur=LAMP">Votre langage et le serveur utilisé ?</a>
	<?php
		if (isset($_GET['langage']) AND isset($_GET['serveur'])){
	    echo 'Je développe en ' . $_GET['langage'] . ' via ' . $_GET['serveur'] . ' !';
	}
	else{
	    echo 'Nous n\'avons pas d\'informations sur votre langage utilisé et via quel moyen !';
	}
	?>
</body>
</html>
