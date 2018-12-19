<?php
$showForm = true; //je declare ma variable pour l'appliquer en true ou en false sur la partie que je souhaite masquer ou afficher 
?>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice6 partie7php</title>
    </head>
    <body>
        <?php
        // je place cette partie en premier car sinon, le formulaire n'est pas masqué.
        if (isset($_GET['envoyer'])) { //si formulaire a été envoyé
            // on affiche nos résultats
            echo 'Bonjour ' . $_GET['nom'] . ', Votre nom est ' . $_GET['lastname'] . ', et votre prénom est ' . $_GET['firstname'] . '.';
            $showForm = false; // ma variable return false donc cache mon formulaire remplie.
        }
        ?> 

        <?php if ($showForm) { ?> <!-- a noter que ?> est rajouter pour enfermer dans du php, ma condition qui applique ma variable qui return true, puisque dans la partie affichage résultat il est false.-->
            <form action="exercice6.php" method="GET" name="form">
                <select name="nom" size="1">
                    <option>MR</option>
                    <option>MME</option>
                </select><br />
                <input type="text" size="15" placeholder="Nom" name="lastname"/><br />
                <input type="text" size="15" placeholder="Prénom" name="firstname"/><br />
                <input type="submit" value="envoyer" name="envoyer" /> 
            </form>
        <?php } ?>



        <!-- voir sur firefox fonction hide en php pour savoir comment cacher mon formulaire -->
    </body>
</html>
