<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice1 partie9php</title>
    </head>
    <body>
        <h1>Afficher la date courante en php</h1>
        <p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</p>
        <?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra');?> <!-- function pr que la date soit affiché en français-->
        <p><?= strftime('%Y-%m-%d %H:%M:%S'); ?></p>  <!-- 2018-11-23 09:53:04 --><!--on n'a pas besoin de mettre de echo quand on met le raccourcis ?= -->
        <p> <?= strftime('%A %d %B %Y, %H:%M'); ?></p> <!-- vendredi 23 novembre 2018, 09:53b -->
        <p> <?= strftime('%d/%m/%y'); ?></p>       <!--  23/11/18 -->
        <p> <?= strftime('%d/%m/%Y'); ?></p>  <!--Afiiche la date 23/11/2018 -->
        
        
        <!-- partie correction -->
<?php date('d/m/Y'); 

?>
    </body>
</html>
