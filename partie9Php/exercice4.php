<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice4 partie9php</title>
    </head>
    <body>
        <h1>Timestamp</h1>
        <p>Afficher le timestamp du jour.</p>
        <!--Pour obtenir le timestamp actuel, c’est-à-dire le nombre de secondes écoulées depuis le 1er janvier 1970 
        jusqu’à aujourd’hui, nous allons utiliser la fonction time()-->
        <?php
        echo 'Timestamp actuel: ' . time(); //le fonction time() permet l'affichage de du timestamp.
        ?>
         <p>Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
         <?php
         $timestamp= mktime(15, 0, 0, 8, 2, 2016);//heure, minute, seconde, mois, jour, et année.
         echo 'timestamp relatif au mardi 2 août 2016 à 15h00: ' .$timestamp; 
         ?>
    </body>
</html>
