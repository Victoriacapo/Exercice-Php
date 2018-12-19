<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <title>exercice3 partie3php</title>
    </head>
    <body>
        <?php
       $nbre1=100;
       $nbre2=15;
       while($nbre1>=10){
         echo " $nbre1*$nbre2= <br />"; // j'affiche a l'écran l'opération
         echo $nbre1*$nbre2; //on multiplie nbre1*nbre2
         echo "<br />";
         $nbre1--; //on decremente
       }
        ?>
    </body>
</html>
