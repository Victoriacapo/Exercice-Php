<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice5 partie4php</title>
    </head>
    <body>
        <?php
     function hello($mot, $chiffre){               
            return  $mot . ' ' . (string)$chiffre;   //je spécifie que je veux que l'on me renvoir $chiffre en string mais ce n'est pas obligatoire car me renvoie dans ce cas précis un string.                 
        }
       echo hello('hola',12);     
        ?>
    </body>
</html>
