<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice 4 partie 8</title>
    </head>
    <body>
        <h1>Exercice 4 partie 8</h1>
        <p> <?php echo isset($_COOKIE['login'] ) ?  'Bonjour ' . $_COOKIE['login'] . ' !' : 'Il n\'y pas de cookie'; ?></p>
    </body>
</html>