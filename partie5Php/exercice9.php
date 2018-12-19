<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice9 partie5php</title>
    </head>
    <body>
        <?php
        $departement = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme');
        foreach($departement as $valeur){?>
        <p><?=$valeur;?></p> <!-- Cette partie est du html avec du php a l'intérieur, procéder de cette façon pour que les valeur a l'affichage aille a la ligne automatiquement.-->
        <?php }
        ?>
    </body>
</html>
