<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice7 partie4php</title>
    </head>
    <body>
        <?php
       function hello($gender, $age){   
           if ($age<=18){
                return 'Vous êtes un '.$gender. ' et vous êtes mineur  ';
           }
           elseif ($age>18){
                return 'Vous êtes un '.$gender.' et vous êtes majeur  ';
           }    
       } 
     
       echo hello('homme', 12);
       echo hello('homme', 25);
       echo hello ('femme', 24);
       echo hello('femme', 15);
          ?>
    </body>
</html>
