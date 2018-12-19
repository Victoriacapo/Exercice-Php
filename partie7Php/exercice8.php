<?php
$showForm = true; //variable pour  aplliquer l'affichage de mon formulaire.
$extension = 'pdf'; //variable pour appliquer la vérification de l'extension du fichier chargé.
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice8 partie7php</title>
    </head>
    <body>
        <?php
        // je place cette partie en premier car sinon, le formulaire n'est pas masqué.
        if (isset($_POST['send']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
            //print_r(pathinfo($_FILES['file']['name'])['extension']); m'aide pour m'afficher la clé dont j'ai besoin soit le ['name'] ou ['extension'] du fichier.
            $typeFile = pathinfo($_FILES['file']['name'])['extension'];// declaration variable pr afficher les index/données que je veux afficher et exploiter.
            if ($typeFile != $extension) {
                echo 'le fichier chargé doit être de type ' . $extension . ', veuillez charger un fichier conforme.';
            } else {
                // on affiche nos résultats
                echo 'Bonjour, ' . $_POST['gender'] . ' votre nom est ' . $_POST['lastname'] . ', et votre prénom est ' . $_POST['firstname'] .
                '. Votre fichier ' . $_FILES['file']['name'] . ' a bien été chargé.';
            }

            $showForm = false; // ma variable return false donc cache mon formulaire remplie.
        }
        ?> 
        <?php if ($showForm) { ?> <!-- a noter que ?> est rajouter pour enfermer dans du php ma variable qui return true, puisque dans la partie affichage résultat il est false.-->
            <p>Veuillez renseigner les champs du formulaire.</p>
            <form action="exercice8.php" method="POST" name="form" enctype="multipart/form-data">
                <select name="gender" size="1">
                    <option>MR</option>
                    <option>MME</option>
                </select><br />
                <input type="text" size="15" placeholder="Nom" name="lastname"/><br />
                <input type="text" size="15" placeholder="Prénom" name="firstname"/><br />
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" /><!-- champ qui permet de controler le format fichier-->
                <input type="file" name="file" /> <!--champ fichier ajouté -->
                <input type="submit" value="envoyer" name="send" /> 
            </form>
        <?php } ?>

    </body>
</html>
