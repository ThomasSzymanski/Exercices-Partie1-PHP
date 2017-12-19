<!DOCTYPE html>
<?php
setcookie('login', $_POST['login'] . ' ' . $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice 4 partie 8</title>
    </head>
    <body>
        <?php
        if ($_COOKIE['login'] != "") {
            echo 'Bonjour ' . $_COOKIE['login'] . ' !';
        } else {
            echo 'Il n\'y pas de cookie';
        }
        ?>
    </body>
</html>