<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$months = array('02' => 'Aisne','59' => 'Nord','60' => 'Oise','62' => 'Pas-de-Calais','80' => 'Somme');

		foreach($months as $dpt => $month){
			echo 'Le département ' . $month . ' ' . ' a le numéro ' . ' ' . $dpt . '. ';
		}
	?>
</body>
</html>
