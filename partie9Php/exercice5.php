<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice5 partie9php</title>
    </head>
    <body>
        <h1>Dates</h1>
        <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
        <?php
        //Définition des date au format jour-mois-année
        $date1 = "26/10/2018"; // variable avec valeur= date du jour
        $date2 = "16/05/2016"; // variable avec valeur= date de comparaison
//Extraction des données
        list($jour1, $mois1, $annee1) = explode('/', $date1);
        list($jour2, $mois2, $annee2) = explode('/', $date2);

//Calcul des timestamp
        $timestamp1 = mktime(0, 0, 0, $mois1, $jour1, $annee1);
        $timestamp2 = mktime(0, 0, 0, $mois2, $jour2, $annee2);
        $nbJours = abs($timestamp2 - $timestamp1) / 86400; //On utilise abs afin d'obtenir toujours une valeur positive, donc les dates peuvent être mises dans n'importe quel ordre.
        echo "Nombre de jours : " . $nbJours; //Affichage du nombre de jour 
        // Voir cours Pierre Giraud sur les dates en PHP
        ?>
       <!-- on peut utiliser le parametre days ou format pour afficher directement une date -->
    </body>
</html>
