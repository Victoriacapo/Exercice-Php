<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>utilisateur</title>
    </head>
    <body>
       
        <?php
        //untilisation de la méthode POST
    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['envoyer'])) {
	// on affiche nos résultats
	echo 'Votre nom est '.$_POST['lastname'].' et votre prénom est '.$_POST['firstname'];
}
        ?>
        
      <!--  if(isset($_POST['envoyer'])){ // si formulaire soumis
echo $_POST['lastname'];
}     autre methode pour afficher les données du formulaire-->
    </body>
</html>
