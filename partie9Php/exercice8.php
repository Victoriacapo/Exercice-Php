<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice8 partie9php</title>
    </head>
    <body>
        <h1>Afficher la date du jour - 22 jours</h1>
        <?php
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); //fonction pour afficher la date en français
        $date_courante = strftime('%d/%m/%Y'); //variable qui génère ma date courante
        ?>
        <p><?= 'ma date courante est le :  ' . $date_courante; ?></p> <!-- un echo qui vérifie ma date du jour.-->

        <?php $date_fin = date('d/m/Y', strtotime(' -22 days')); ?> <!-- je déclare une variable qui génereras ma date courante -22 jours.-->
        <p><?= 'ma date courante - 22 jours =  '. $date_fin; ?></p> <!--j'affiche ma date de fin(date courante -22jrs).-->
    </body>
</html>
