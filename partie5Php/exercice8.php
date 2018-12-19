<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice8 partie5php</title>
    </head>
    <body>
        <h1>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</h1>
        <?php
         $Month=array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
         foreach($Month as $valeur){
             echo '/ '.$valeur;
         } 
        ?>
    </body>
</html>
