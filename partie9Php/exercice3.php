<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice3 partie9php</title>
    </head>
    <body>
        <h1>Afficher Date courante en php</h1>
        <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</p>
        <p>Bonus : Le faire en français.</p>
        <?php
        setlocale(LC_TIME, 'fr_FR.utf8'); // <!-- function pr que la date soit affiché en français-->
        echo strftime('%A %d %B %Y'); // <!-- vendredi 23 novembre 2018 -->
        ?>
    </body>
</html>
