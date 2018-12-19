<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice4 partie6php</title>
    </head>
    <body>
        <p><?= $_GET['language']?></p>
        <p><?= $_GET['server']?></p>
       
 <?php
         if (isset($_GET['language']) AND isset($_GET['server'])) // on a le langage et le serveurs
{
    echo 'Bonjour tu travaille le langage serveur ' . $_GET['language'] . ' avec le serveur ' . $_GET['server'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner un langage et un serveur!';
}
        ?>
    </body>
</html>
