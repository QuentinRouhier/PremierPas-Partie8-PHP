<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice1/index.php">Exercice 1</a></li>
            <li><a href="../exercice3/index.php">Exercice 3</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php if(isset($_SESSION['prenom']) && isset($_SESSION['nom']) && isset($_SESSION['age'])) { ?>
                Salut <?php echo $_SESSION['prenom']; ?> <?php echo $_SESSION['nom']; ?> 
                ! Tu es pas encore toute a fait vieille mais plus tres jeune avec un age certain de <?php echo $_SESSION['age']; ?>.
                <?php
            }
            ?>
        </p>
    </body>
</html> 
<?php
session_unset();
session_destroy();
?>