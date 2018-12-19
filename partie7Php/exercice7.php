<?php
$showForm = true;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice7 partie7php</title>
    </head>
    <body>
        <?php
        // GET et POST enferme les données dans un tableau asssociatif.
        // je place cette partie en premier car sinon, le formulaire n'est pas masqué.
        if (isset($_POST['send']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
            // on affiche nos résultats
            echo 'Bonjour, votre nom est ' . $_POST['lastname'] . ', et votre prénom est ' . $_POST['firstname'] .
                    //$_FILES met sous forme de tableau les données de mon fichier, ['name']va afficher le nom de mon fichier
            '. Votre fichier ' . $_FILES['file']['name']. ' a bien été chargé.';
            $showForm = false; // ma variable return false donc cache mon formulaire remplie.
        }
        ?> 
        <?php if ($showForm) { ?> <!-- a noter que ?> est rajouter pour enfermer dans du php, ma variable qui return true, puisque dans la partie affichage résultat il est false.-->
        <p>Veuillez renseigner les champs du formulaire.</p>
        <form action="exercice7.php" method="POST" name="form" enctype="multipart/form-data">
                <select name="nom" size="1">
                    <option>MR</option>
                    <option>MME</option>
                </select><br />
                <p><input type="text" size="15" placeholder="Nom" name="lastname" /></p>
                <p><input type="text" size="15" placeholder="Prénom" name="firstname" /></p>
                <p><input type="hidden" name="MAX_FILE_SIZE" value="1048576" /></p><!-- champ qui permet de controler le format fichier-->
                <p><input type="file" name="file" /></p><!--champ fichier ajouté -->
                <input type="submit" value="envoyer" name="send" /> 
            </form>
        <?php } ?>


    </body>
</html>
