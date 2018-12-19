<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice7 partie9php</title>
    </head>
    <body>
        <h1>Afficher la date du jour + 20 jours.</h1>
        <?php
        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');//fonction pour afficher la date en français
        $date_courante= strftime('%d/%m/%Y'); //variable qui génère ma date courante
        ?> 
        <p><?= 'ma date courante est le : '.$date_courante; ?></p> <!-- un echo qui vérifie ma date du jour.-->
        
            <?php $date_fin = date('d/m/Y', strtotime(' +20 days'));?> <!-- je déclare une variable qui génereras ma date courante +20 jours.-->
        <!--date('d/m/y', strtotime('+20 days')) la function date retourne automatiquemt la date du jour, strtotime('+20 days') rajoute les 20 jours.
            <p><?= 'ma date courante + 20 jours = '.$date_fin;?></p> <!--j'affiche ma date de fin(date courante +20jrs).-->
        
    </body>
</html>
