<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice3 partie2php</title>
    </head>
    <body>
        <?php
        $age = 28;
        $gender = 'femme';

        if ($age >= 18) {
            echo "Vous avez $age ans, vous êtes majeur";
        } else {
            echo "Vous avez $age vous êtes mineur";
        }

        if ($gender == 'femme') {
            echo ' et vous êtes une femme.';
        } else {
            echo ' et vous êtes un homme.';
        }
        ?>
    </body>
</html>
