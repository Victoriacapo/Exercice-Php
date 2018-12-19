<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice7bis</title>
    </head>
    <body>
        <?php

        function hello($gender, $age) {
            if ($age <= 18) {
                if ($gender == 'homme') {
                    return 'Vous êtes un homme Vous êtes mineur';
                } else {
                    return 'Vous êtes une femme Vous êtes mineur';
                }
            } else {
                if ($gender == 'homme') {
                    return 'Vous êtes un homme Vous êtes majeur';
                } else {
                    return 'Vous êtes une femme Vous êtes majeur';
                }
            }
        }
        ?>
        
        <p><?=  hello('homme', 12);?></p>
        <p><?= hello('femme', 25);?></p>
    </body>
</html>
