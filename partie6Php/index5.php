<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice5 partie6php</title>
    </head>
    <body>
        <p><?= $_GET['week'] ?></p>
        <?php
          if (isset($_GET['week'])) // on a la semaine
{
    echo 'Bonjour nous sommes à la semaine ' . $_GET['week'] . ' du mois !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner le numéro de la semaine !';
}
        ?>
    </body>
</html>
