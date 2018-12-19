<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>Exercice4 partie2php</title>
    </head>
    <body>
        <?php
        $magnitude=9;
        switch ($magnitude) {
	case 1:
		echo 'Micro-séisme impossible à ressentir.';
		break;
	case 2:
		echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
		break;
	case 3:
		echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
		break;
        case 4:
		echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
		break;   
        case 5:
		echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
		break;
        case 6:
		echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
		break;
        case 7:
		echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
		break;   
        case 8:
		echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
		break;  
        case 9:
		echo 'Séisme capable de tout détruire sur une très vaste zone.';
		break;
        default:
            echo'la valeur ne rentre pas dans l\'echelle de richster';
}
        ?>
    </body>
</html>
