<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<select name="sexe">
			<option value="Monsieur" selected="selected">Mr</option>
			<option value="Madame">Mme</option>
		</select>
		<label>Nom : <input type="text" name="nom"></label>
		<label>Prénom : <input type="text" name="prenom"></label>
		<input type="submit" name="valider" value="Validation">
	</form>
</body>
</html>