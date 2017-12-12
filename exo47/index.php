<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php?semaine=12">Quelle semaine ?</a>
	<?php
		if (isset($_GET['semaine'])){
	    echo $_GET['semaine'] . ' semaines écoulées !';
	}
	else{
	    echo 'Le calendrier a brûlé !';
	}
	?>
</body>
</html>
