<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice3 partie4php</title>
    </head>
    <body>
        <?php
        function hello($bonjour, $hello){               /*mettre en parametre bonjour et hello*/
            echo $bonjour . $hello;                     /* la fonction contient les deux parametres */
        }
        hello('hola ',' hey');                            /* quand j'appelle ma fonction, je lui mentionne les valeurs  de mes 2 paramètres*/
        ?>
    </body>
</html>
