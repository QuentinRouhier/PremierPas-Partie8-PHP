<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice2/index.php">Exercice 2</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php
            print_r($_SERVER['HTTP_USER_AGENT']);
            ?>
        </p>
        <p>
            <?php
            print_r($_SERVER['REMOTE_ADDR']);
            ?>
        </p>
        <p>
            <?php
            print_r($_SERVER['SERVER_NAME']);
            ?>
        </p>    
    </body>
</html>