<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p><?php echo 'Ton adresse IP est : ' . $_SERVER['HTTP_USER_AGENT'];?></p>
	<p><?php echo 'Ton adresse IP est : ' . $_SERVER['REMOTE_ADDR'];?></p>
	<p><?php echo 'Le nom du serveur : ' . $_SERVER['SERVER_NAME'];?></p>
</body>
</html>