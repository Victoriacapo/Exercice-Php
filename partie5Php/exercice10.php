<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice10 partie5php</title>
    </head>
    <body>
        <?php
         $departement = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme');
         foreach($departement as $index => $valeur){
              echo ' / '.$index. ' = '.$valeur;
         }
        ?>
    </body>
</html>
