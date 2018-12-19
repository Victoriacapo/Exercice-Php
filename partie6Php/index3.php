<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice3 partie6php</title>
    </head>
    <body>
        <p><?= $_GET['startDate']?></p>
        <p><?= $_GET['endDate']?></p>
        <?php
        if (isset($_GET['startDate']) AND isset($_GET['endDate'])) // on a les dates
{
    echo 'Bonjour les festivités commence le ' . $_GET['startDate'] . ' et se termine ' . $_GET['endDate'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner une date !';
}
?>  
       
    </body>
</html>
