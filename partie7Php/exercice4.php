<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice4 partie7php</title>
    </head>
    <body>
         <form action="user2.php" method="post"><!--action spécifie ou les données vont être récupérer et traité -->
             <p><label for="lastname"> Veuillez entrer votre nom</label>
                 <input type="text" name="lastname" id="lastname" /></p>
             <p><label for="firstname"> Veuillez entrer votre prénom </label>
             <input type="text" name="firstname" id="firstname" /></p>
            <input type="submit" value="envoyer" name="envoyer" /> 
        </form>
        <?php
       // les données récupéré dans le formulaire vont être affiché dans le fichier user2.php
        ?>
    </body>
</html>
