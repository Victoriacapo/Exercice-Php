<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice2 partie2php</title>
    </head>
    <body>
        <?php
     $isEasy=false;
     if ($isEasy==true){
         echo ' C\'est facile';
     }
     else{
         echo ' C\'est difficile';
     }
     ?>
        <p><?php echo($isEasy==true)?' c\'est facile' : 'c\'est difficile'; ?></p>  <!--turner (pour le bonus)-->
     
         
        
    </body>
</html>
