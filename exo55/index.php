<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if(!isset($_POST['valider'])){
	?>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<select name="sexe">
				<option value="Monsieur ou Madame ?" selected="selected"></option>
				<option value="Monsieur">Mr</option>
				<option value="Madame">Mme</option>
			</select>
			<label>Nom : <input type="text" name="nom"/></label>
			<label>Prénom : <input type="text" name="prenom"/></label>
			<input type="file" name="envoi"/>
			<input type="submit" name="valider"/>
		</form>
	<?php 
		}
		if(isset($_POST['valider'])){
echo $_POST['sexe'] . ' ' . $_POST['prenom'] . ' ' . $_POST['nom'] . ' enchanté !' . ' Nous avons bien reçu votre fichier : ' . $_FILES['envoi']['name'];
		}
	?>
</body>
</html>