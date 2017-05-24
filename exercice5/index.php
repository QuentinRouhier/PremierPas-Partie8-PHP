<?php
// /!\ la fonction setcookie() est à placé avant la balise doctype !! /!\
// Le dernier paramètre  true  permet d'activer le mode  httpOnly  sur le cookie, et donc de le rendre en quelque sorte plus sécurisé.
setcookie('userLogin', $_POST['userLogin'], time() + 365 * 24 * 3600, '/', null, false, true);
setcookie('userPassword', $_POST['userPassword'], time() + 365 * 24 * 3600, '/', null, false, true);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 5</title>
        <meta charset="utf-8"/>
        <link href="../asset/css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <!-- 
        ******* ÉNONCÉ  *******
        Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
        -->
        <h1><strong>Exercice 5</strong></h1>
        <div class="btn-group">
            <a type="button" class="btn btn-primary" href="../exercice1/index.php">exercice 1</a>
            <a type="button" class="btn btn-primary" href="../exercice2/index.php">exercice 2</a>
            <a type="button" class="btn btn-primary" href="../exercice3/index.php">exercice 3</a>
            <a type="button" class="btn btn-primary" href="../exercice4/index.php">exercice 4</a>
            <a type="button" class="btn btn-primary" href="index.php">exercice 5</a>
        </div>
        <div class="content">
            <form action="index.php" method="POST">
                <p><label>Login </label><input title="Login" type="text" name="userLogin"/></p>
                <p><label>Password </label><input title="Password" type="password" name="userPassword"/></p>
                <p><label></label><input type="submit"/></p>
            </form>
            <p><?php
                if (isset($_COOKIE['userLogin']) && isset($_COOKIE['userPassword'])) {
                    echo 'votre login : ' . $_COOKIE['userLogin'] . ' et votre mot de passe : ' . $_COOKIE['userPassword'];
                }
                ?></p>
        </div>
    </body>
</html>