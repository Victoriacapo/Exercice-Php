<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice6 partie6php</title>
    </head>
    <body>
         <p><?= $_GET['building']?></p>
         <p><?= $_GET['room']?></p>
        <?php
               if (isset($_GET['building']) AND isset($_GET['room'])) // on a la réservation
{
    echo 'Bonjour, vous êtes logé  dans le batiment ' . $_GET['building'] . ' et dans la chambre n° ' . $_GET['room'] . ' .';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Votre réservation n\'est pas pris en compte !';
}
        ?>
<!--N'OUBLE PAS DE RAJOUTER LES PARAMETRE DANS L'URL, POUR AFFICHER LES DONNEES CORRECTEMENT, VOIR GIT LA MANU-->
    </body>
</html>
