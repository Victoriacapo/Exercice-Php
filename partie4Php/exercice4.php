<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <title>exercice4 partie4php</title>
    </head>
    <body>
        <?php
       function total($nbre1, $nbre2){
         if($nbre1<$nbre2){
             return "le premier chiffre est inferieur au deuxieme"; //je peut mettre $result au lieu de return, sa les erreurs dans la boucle
         }
         elseif ($nbre1>$nbre2) {
         return "le premier chiffre est superieur au deuxieme";
       }
       elseif ($nbre1==$nbre2) {
           return "le premier chiffre est égale au deuxieme";
   }
       }
       echo total(4 , 9);
       
        ?>
    </body>
</html>
