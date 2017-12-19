<?php
setcookie('login', $_POST['login'] . ' ' . $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice 3 partie 8</title>
    </head>
    <body>
        <form method="post" action="user.php">
            <label>Login<input type="text" name="login"/></label>
            <label>Mot de passe<input type="password" name="password"/></label>
            <button type="submit">Valider</button>
        </form>
    </body>
</html>