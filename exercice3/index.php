<?php
if (isset($_POST['login']) AND isset($_POST['mdp'])) {
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true); // On écrit un cookie
    setcookie('mdp', $_POST['mdp'], time() + 365 * 24 * 3600, '/', null, false, true); // On écrit un cookie
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice2/index.php">Exercice 2</a></li>
            <li><a href="../exercice4/index.php">Exercice 4</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <form action="index.php" method="post">
            <div id="formulaire">
                <li><label for="login">Identifiant</label><input type="text" name="login" placeholder="Identifiant"></li>
                <li><label for="mdp">Mot de passe :</label><input type="password" name="mdp" placeholder="Mot de passe"></li>
                <li><input type="submit" value="Valider" /></li>
            </div>
        </form>
        <p>
            <?php
            if (isset($_POST['login']) AND isset($_POST['mdp'])) {
                $_COOKIE['login'] = $_POST['login'];
                $_COOKIE['mdp'] = $_POST['mdp'];
                echo $_COOKIE['login'] . $_COOKIE['mdp'];
            }
            ?>
        </p>
    </body>
</html>