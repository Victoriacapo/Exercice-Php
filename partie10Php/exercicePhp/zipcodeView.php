<?php
// appel du controller controllerZipcode
include_once('controllerZipcode.php');

//permet qu'une fois mon formulaire complet et envoyé, d'être redirigé ver la page inscription
if(!isset($errorsArray['zipCode']) && isset($_POST['sendButton'])){
  header('location:inscriptionView.php');  
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>verification code postal partie10php</title>
    </head>
    <body>

        <!--Formulaire POUR CODE POSTAL-->
        <form name="inscription" action="" method="POST">
            <h1>Vérification adresse</h1>
            <p><label for="zipCode"> Veuillez entrer votre code postal </label>
                <input type="text" placeholder="34000" name="zipCode" id="zipCode" value="<?= isset($_POST['zipCode']) ? $zipCode : ''; ?>"/><!--ternaire pr que la valeur saisie ne soit pas refresh -->
                <span class="error"><?= isset($errorsArray['zipCode']) ? $errorsArray['zipCode'] : ''; ?></span>
            </p>
            <input type="submit" name="sendButton" value="Envoyer" />
        </form>











        <!--bouton valider lier au modal -->
        <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              MA MODAL
          </button>-->


        <!-- Modal -->
        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         ...
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Save changes</button>
                     </div>
                 </div>
             </div>
         </div> 
 
 
 
         <script>// script pour le afficher/cacher le modal
             $('#myModal').on('shown.bs.modal', function () {
                 $('#myInput').trigger('focus')
             })
         </script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
