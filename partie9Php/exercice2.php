<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice2 partie9php</title>
    </head>
    <body>
        <h1>Date Courante en php</h1>
        <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p>
        <?php
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); // <!-- function setlocale() pr que la date soit affiché en français-->
       echo 'La date du jour est :   '. strftime('%d-%m-%y'); // <!--  23-11-18 -->
       ?>
    </body>
</html>
