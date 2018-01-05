<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ' . $_SESSION['age'];
	?>
</body>
</html>
<!-- Ferme provisoirement la session sans le détruire -->
<?php
	session_write_close();
?>