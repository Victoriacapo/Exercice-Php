<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice7 partie5php</title>
    </head>
    <body>
        <?php
         $departement = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme');
//         $departement += [51 => 'Marne']; //autre methode mais + contraignante pour la suite
         $departement[51] = 'Marne';
         ksort($departement); // ksort utilisé pour trier mes valeurs par l'index attribué (51) pour la Marne qui a été rajouté a la fin.
         var_dump($departement);
        ?>
    </body>
</html>
