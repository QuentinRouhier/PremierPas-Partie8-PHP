<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 4</title>
        <meta charset="utf-8"/>
        <link href="../asset/css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <!-- 
        ******* ÉNONCÉ  *******
        Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
        -->
        <h1><strong>Exercice 4</strong></h1>
        <div class="btn-group">
            <a type="button" class="btn btn-primary" href="../exercice1/index.php">exercice 1</a>
            <a type="button" class="btn btn-primary" href="../exercice2/index.php">exercice 2</a>
            <a type="button" class="btn btn-primary" href="../exercice3/index.php">exercice 3</a>
            <a type="button" class="btn btn-primary" href="index.php">exercice 4</a>
            <a type="button" class="btn btn-primary" href="../exercice5/index.php">exercice 5</a>
        </div>
        <div class="content">
            <form action="action">
                <p><label>Login </label><input title="Login" type="text" name="userLogin"/></p>
                <p><label>Password </label><input title="Password" type="password" name="userPassword"/></p>
                <p><label></label><input type="submit"/></p>
            </form>
            <p><?php
                if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
                    echo 'votre login : ' . $_COOKIE['login'] . ' et votre mot de passe : ' . $_COOKIE['password'];
                }
                ?></p>
        </div>
    </body>
</html>