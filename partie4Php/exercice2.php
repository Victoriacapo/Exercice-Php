<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <title>exercice2 partie4php</title>
    </head>
    <body>
        <?php
        $bonjour= "salut";
       function hello($bonjour){                        /*crée une fonction*/
           echo $bonjour;
       }
       hello($bonjour);                                 /*appelle la fonction*/
        ?>
    </body>
</html>
