<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice4 partie8php</title>
    </head>
    <body>
        <div>
        <h1>PHP - Variables superglobales, sessions et cookies</h1>
        <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        </div>
        
        
        
        <div>
        <h2>Les valeurs du précédent cookie sont :</h2><!-- les cookie s'affiche seulement en refresh la page-->
        <p>Login : <?= $_COOKIE['login']; ?></p> <!--afficher mon cookie login de l'exercice précédent, affiche les données précédentes tant que de nouvelles données n'ont pas été enregistré  -->
        <p>Password : <?= $_COOKIE['pwd']; ?></p><!--afficher mon cookie pwd de l'exercice précédent -->
        </div>
    </body>
</html>
