<?php
session_start(); //demarre ma session
$_SESSION['lastname'] = 'Prune'; //declare mes variables pr ma session
$_SESSION['firstname'] = 'Victoria'; 
$_SESSION['age'] = 12;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice2 partie8php</title>
    </head>
    <body>
        <h1>PHP - Variables superglobales, sessions et cookies</h1>
        <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
        
    <?php
        //affiche les valeurs de mes variables.
        echo 'Vous êtes: ' .$_SESSION['lastname']. '  ';
        echo $_SESSION['firstname'];
        echo ', et vous avez '.$_SESSION['age']. ' ans.';
        ?>
    </body>
</html>
