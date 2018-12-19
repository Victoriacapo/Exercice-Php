<?php
setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); //fonction pour afficher la date en français
$month = array(
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
);
$yearMin = 2010; //variable contenant mon année minimum
$yearMax = 2030;// variable contenant mon année maximum
$day = 1;


if (isset($_GET['year']) && isset($_GET['month'])) {
    // on affiche nos résultats
    echo 'vous avez choisie l\'année  ' . $_GET['year'] . ',  et votre mois est  ' . $_GET['month'];
}

//Nombre de jour dans le mois
$totalDay = cal_days_in_month(CAL_GREGORIAN, $_GET['month'], $_GET['year']);
echo ' <br /> Il y a ' . $totalDay . ' jours dans ce mois.';

// afficher le jour choisie
$dayChoice = ($_GET['year'] . '-' . $_GET['month'] . '-01' );
echo $dayChoice;

// Affiche le 1er jour du mois sélectionné avec 'N'
$firstDay_mois = date('N', strtotime($dayChoice));
echo '<br />' . $firstDay_mois;

/*Affiche le dernier jour du mois avec 't'
$lastDay_mois = date('t', strtotime($dayChoice));
echo '<br />' . $lastDay_mois;*/

//affiche le nbre de case a afficher
$totalCase = date(($totalDay + $firstDay_mois) - 1);//total de jour dans un mois + le chiffre lié au 1er jour du mois 
echo '<br />' . $totalCase;

// permet de dessiner les case jours qui seront vide a la fin du mois.
if(($totalCase%7)!= 0){
    $totalCase= $totalCase+(7-($totalCase%7));
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>TP Calendrier_PHP</title>
    </head>
    <body>
        <h1>Calendrier_PHP</h1>
        <p>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, 
            et le deuxième permet d'avoir l'année.
            En fonction des choix, afficher un calendrier comme celui ci :</p>

        <form action="TP.php" method="GET" name="form" enctype="multipart/form-data"><!--Formulaire avec jour de la semaine -->
            <select name="year" id="year"><!--liste déroulante pour choix de l'année -->
                <?php
                while ($yearMin <= $yearMax) {
                    $yearMin++;
                    ?>
                    <option value="<?php echo $yearMin ?>"><?php echo $yearMin ?></option>
                <?php }
                ?>
            </select>

            <select name="month" id="month"><!--liste déroulante pour choix du mois -->
                <?php
                foreach ($month as $key => $valeur) { // affiche les index du tableau associatif et leurs valeurs.
                    ?>
                    <option value="<?php echo $key; ?>"><?php echo $valeur; ?></option> <!--L'option renvoie l'index en valeur(cache permet au script d). Et affiche les valeur  dans le tableau. -->
                <?php }
                ?>
            </select>
            <input type="submit" name="validate" /> 
        </form>

        <table border="1"><!-- tableau avec jour de la semaine-->
            <thead>
                <tr>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
            </thead>
            <tbody>
                <tr><!--permet d'aller à la ligne, constitue tout les données d'une ligne -->
                    <?php
                    for ($case = 1; $case <= $totalCase; $case++) { //initialise une variable $case a 1 puis l'utilise pr générer les lignes de cases.
                        if ($case >= $firstDay_mois) {
                            ?>
                            <td> <?= $day <= $totalDay ? $day: '' ; ?></td> <!--si $case <= $fistDay_mois, mettre des cases remplies des jours -->
                            <?php
                            $day++;
                        } else { ?>       <!-- sinon ne rien mettre -->
                            <td></td>
                            <?php
                        }

                        if (($case % 7) == 0) {?> <!--Si modulo %7 est égale à 0 -->
                         </tr><tr>
                        <?php
                    }
                }
                ?>
                </tr>

            </tbody>
        </table>





<!-- Voir php, documentation: date-->

    </body>
</html>
