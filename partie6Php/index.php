<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice1 partie6php</title>
    </head>
    <body>
        <p><?= $_GET['lastname']?></p>
        <p><?= $_GET['firstname']?></p>
        
       <?php
  if (isset($_GET['lastname']) AND isset($_GET['firstname'])) // On a le nom et le prénom
{
    echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner un nom et un prénom !';
}
?>  
    </body>
</html>
