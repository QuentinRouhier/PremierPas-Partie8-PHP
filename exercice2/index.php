<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Virginie';
$_SESSION['nom'] = 'Le Guilchet';
$_SESSION['age'] = 33;
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
        <a href="ex2.php">Lien vers la suite de l'exercice</a>
        </p>
    </body>
</html>
<?php 
session_write_close();
?>