<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice5 partie9php</title>
    </head>
    <body>
        <h1>Afficher le nombre de jour dans le mois de février de l'année 2016.</h1>
        <?php
        $fevrier_2016 = date("t", mktime(0, 0, 0, 2, 1, 2016)); //création variable fev2016 qui contient la fontion date('t') et à l'intérieur la fonction mktime à laquel j'ajoute le mois que je veux tester.
        echo 'En fevrier 2016, il y avait ' . $fevrier_2016 . ' jours.'; //retourne la valeur de ma variable fevrier_2016.
        ?>

        <h2>Explication</h2>
        <p>La fonction php mktime() permet de retourner une date et une heure au format timestamp de unix. Des arguments peuvent lui être fournis afin de connaître les valeurs souhaitées selon votre utilisation.

            Voici la liste des arguments pouvant être transmis à cette fonction de date mktime(h,i,s,m,d,y,dst):

            h : heures
            i : minutes
            s : secondes
            m : numéro du mois dans l'année (de 1 à 12)
            d : numéro du jour dans le mois (de 1 à 31)
            y : année
            dst : défini si l'heure d'hiver est à appliquer sur l'heure

            Si aucun paramètre n'est passé dans cette fonction, mktime retournera la date/heure du jour en cours.

            Cette fonction permet également d'effectuer des calculs de dates.</p>
        <p>Voir cour Pierre Giraud</p>
    </body>
</html>
