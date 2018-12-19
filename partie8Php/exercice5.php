<?php
$show = true;// variable pour jouer sur l'affichage de mes cookies, et de mon formulaire.
if (isset($_POST['login'], $_POST['pwd'])){
    setcookie('login', $_POST['login'], time() + 365*24*3600);//création du cookie login
    setcookie('pwd', $_POST['pwd'], time() + 365*24*3600);//création du cookie pwd
    header('location: exercice5.php'); //evite de refresh la page du navigateur pour avoir les valeurs nouvellement saisie de mes cookies.
    
    $show = false;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice5 partie8php</title>
    </head>
    <body>
        <h1>Consigne: Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</h1>
      <?php if ($show){ ?>
        <form action="exercice5.php" method="post">
            <h1>Création Cookie</h1>
            <label>Votre login : </label><input type="text" name="login" id="login" /><br /> <!--champ pour renseigner son login -->
            <label>Votre mot de passé : </label><input type="password" name="pwd" id="pwd" /><br /><!--champ pour renseigner son pwd-->
            <input type="submit" value="Créer"><!--creer le cookie -->
        </form>
        <?php } else { ?>
            <p>Votre cookie a bien été crée</p>
        <?php } ?> 
            
            <h1>Les nouvelles valeurs du cookie sont :</h1> <!-- Il faut refresh la page du navigateur pour avoir les nouvelles valeurs des cookies-->
        <p>Login : <?= $_COOKIE['login']; ?></p>
        <p>Password : <?= $_COOKIE['pwd']; ?></p>
        <!--Les nouvelles valeur écrase automatiquement les anciennes, car le nom login et pwd reste les mêmes, pour avoir de nouvelle données et garder les anciennes, 
        il suffit d'ajouter un nouveau setcookie() et lui donner un nouveau nom.-->
    </body>
</html>
