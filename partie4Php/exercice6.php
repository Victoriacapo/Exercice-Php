<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercice6 partie4php </title>
    </head>
    <body>
        <?php
        function hello($nom, $prenom, $age){               
            return "Bonjour $nom  $prenom  , tu as  $age ans.";                    
        }
        echo hello('Fret','Victoria',12);   
        ?>
    </body>
</html>
