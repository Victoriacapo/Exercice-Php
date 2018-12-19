<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice5 partie7php</title>
    </head>
    <body>
        <form action="exercice5.php" method="GET">
            <select name="nom" size="1">
                <option disabled selected></option> <!-- choisie par defaut, si aucune option n'a été choisie-->
                <option>MR</option>
                <option>MME</option>
            </select><br />
            <p><label>NOM:</label>
                <input type="text" size="15" value="Nom" name="lastname"/></p>
            <p> <label>PRENOM:</label>
                <input type="text" size="15" value="Prénom" name="firstname"/></p>
            <p><input type="submit" value="envoyer" name="envoyer" /> </p>
        </form>

        <?php
        if (isset($_GET['nom']) && isset($_GET['lastname']) && isset($_GET['firstname'])) {
            // on affiche nos résultats
            echo 'Bonjour ' . $_GET['nom'] . ', Votre nom est ' . $_GET['lastname'] . ', et votre prénom est ' . $_GET['firstname'] . '.';
        }
        ?>
    </body>
</html>
