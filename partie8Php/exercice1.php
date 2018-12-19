<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice1 partie8php</title>
    </head>
    <body>
        <div>
            <h1>PHP - Variables superglobales, sessions et cookies</h1>
            <p> Faire une page HTML permettant de donner à l'utilisateur :</p>

            <p> :son User Agent</p> <!-- le navigateur-->
            <p> :son adresse ip</p><!-- -->
            <p> :le nom du serveur</p><!-- -->


        </div>
        <?php
        echo $_SERVER['HTTP_USER_AGENT']; // retourne le navigateur de l'utilisateur.
        echo $_SERVER['REMOTE_ADDR']; //retourne l'adresse IP de l'utilisateur   ADDR(concerne l'IP). ou ['SERVER_ADDR]. au lieu de echo pr avoir tt les détail mettre var_dump
        echo $_SERVER['SERVER_NAME']; // retourne le nom du serveur qui heberge le fichier.
        ?>
    </body>
</html>
