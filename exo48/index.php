<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php?batiment=12&salle=101">Quel endroit ?</a>
	<?php
		if (isset($_GET['batiment']) AND isset($_GET['salle'])){
	    echo 'Bâtiment : ' . $_GET['batiment'] . ' Salle : ' . $_GET['salle'] . ' - C\'est là que nous nous trouvons !';
	}
	else{
	    echo 'Le GPS ne fonctionne plus, désolé !';
	}
	?>
</body>
</html>
