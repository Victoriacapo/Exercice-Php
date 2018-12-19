<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css" />

        <title>Accueil - Maçonnerie Ocordo</title>       
    </head>
    <body>
        <h1>Partie1 du site</h1>
        //<?php
//        $fichier = 'source.xml';
//        $xml = simplexml_load_file($fichier);
//        echo $xml->page[0]->title;
//        echo $xml->page[0]->menu;
//        echo $xml->page[0]->content;
//        ?>  

        <br />
        <br />
        <br />
        <h1>Partie2 du site</h1>
        <?php
//        $fichier = 'source.xml';
//        $xml = simplexml_load_file($fichier);
//        echo $xml->page[1]->title;
//        echo $xml->page[1]->menu;
//        echo $xml->page[1]->content;
        ?>


        <br />
        <br />
        <br />
        <h1>Partie3 du site</h1>
        <?php
//        $fichier = 'source.xml';
//        $xml = simplexml_load_file($fichier);
//        echo $xml->page[2]->title;
//        echo $xml->page[2]->menu;
//        echo $xml->page[2]->content;
        ?>

        <br />
        <br />
        <br />
        <div class="container-fluid">
        <h1>Partie4 du site</h1>
        <?php
        $fichier = 'source.xml';
        $xml = simplexml_load_file($fichier);
        echo $xml->page[3]->title;
        echo $xml->page[3]->menu;
        echo $xml->page[3]->content;
        ?>

        </div>
      
    </body>
</html>
