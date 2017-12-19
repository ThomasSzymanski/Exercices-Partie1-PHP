<?php
if(isset($_POST['login']) && isset($_POST['password'])){
setcookie('login', $_POST['login'] . ' ' . $_POST['password'], time() + 365 * 24 * 3600, '/', 'exo61', false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exo61</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <label>Login<input type="text" name="login"/></label>
            <label>Mot de passe<input type="password" name="password"/></label>
            <button type="submit">Valider</button>
        </form>
    </body>
</html>