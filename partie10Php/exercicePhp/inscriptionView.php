<?php
session_start();
// appel du controller controllerInscription
include_once('controllerInscription.php');

//permet qu'une fois mon formulaire complet et envoyé, d'être redirigé ver la page mon profil
//if(!isset($errorsArray1['gender']) && isset($_POST['sendButton'])){
//  header('location:monprofilView.php');  
//}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Inscription</title>
    </head>
    <body>
        <!--Formulaire POUR CRÉATION PROFIL-->
        <form name="inscription" action="" method="POST">
            <h1>Inscription</h1>
            <select name="gender">
                <option  value=""  selected disabled></option>
                <option  value="MR" <?= (isset($_POST['gender'] ) && $_POST['gender'] == 'MR')?'selected' : '';//ternaire qui permet de garder les valeurs inscrites à l'envoi?>>MR</option>
                <option  value="MME" <?= (isset($_POST['gender'] ) && $_POST['gender'] == 'MME')?'selected' : '';//ternaire qui permet de garder les valeurs inscrites à l'envoi; ?>>MME</option>
            </select>
            <span class="error"><?= isset($errorsArray1['gender']) ? $errorsArray1['gender'] : ''; ?></span>
            <p><label for="pseudo"> Veuillez entrer votre pseudo </label>
                <input type="text" name="pseudo" id="pseudo" placeholder="pseudo24" value="<?= isset($_POST['pseudo']) ? $pseudo : ''; ?>"/><!--ternaire qui permet que les données saisie reste -->
                <span class="error"><?= isset($errorsArray1['pseudo']) ? $errorsArray1['pseudo'] : ''; ?></span>
            </p>
            <p><label for="password"> Veuillez choisir un mot de passe, 6 caractères minimum, comprenant 1 majuscule et 1 miniscule au minimum, et un caractère spécial</label>
                <input type="password" name="password" id="pseudo" placeholder="Monmotdepasse34" value="<?= isset($_POST['password']) ? $password : ''; ?>"/>
                <span class="error"><?= isset($errorsArray1['password']) ? $errorsArray1['password'] : ''; ?></span>
            </p>
            <p><label for="email"> Veuillez entrer votre adresse mail </label>
                <input type="email" name="email" id="pseudo" placeholder="email@domaine.com" value="<?= isset($_POST['email']) ? $email : ''; ?>"/>
                <span class="error"><?= isset($errorsArray1['email']) ? $errorsArray1['email'] : ''; ?></span>
            </p>
            <input type="submit" name="sendButton" value="Envoyer" />
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
