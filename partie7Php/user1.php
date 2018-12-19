<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Utilisateur1</title>
    </head>
    <body>
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
	// on affiche nos résultats
	echo 'Votre nom est '.$_GET['lastname'].' et votre prénom est '.$_GET['firstname'];
}
        ?>
    </body>
</html>
