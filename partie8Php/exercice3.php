<?php
$show = true;
if (isset($_POST['login'], $_POST['pwd'])){
    setcookie('login', $_POST['login'], time() + 365*24*3600);
    setcookie('pwd', $_POST['pwd'], time() + 365*24*3600);
    $show = false;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice3 partie8php</title>
    </head>
    <body>
        <h1>PHP - Variables superglobales, sessions et cookies</h1>
        <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>
        <?php if ($show){ ?>
            <form action="exercice3.php" method="post">
            <h1>Création Cookie</h1>
            <label>Votre login : </label><input type="text" name="login" id="login" /><br />
            <label>Votre mot de passé : </label><input type="password" name="pwd" id="pwd" /><br />
            <input type="submit" value="Créer">
        </form>
        <?php } else { ?>
            <p>Votre cookie a bien été crée</p>
        <?php } ?>        
    </body>
</html>
