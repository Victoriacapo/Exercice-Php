

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            p{color: red}; 
            div{border: solid 2px black};
        </style>
    </head>
    <body>
        <?php
        $url = "https://www.lequipe.fr/rss/actu_rss_Auto-Moto.xml"; /* insérer ici l'adresse du flux RSS de votre choix */
        $rss = simplexml_load_file($url);
        echo '<ul>';
        foreach ($rss->channel->item as $item) {
            $datetime = date_create($item->pubDate);
            $date = date_format($datetime, 'd M Y, H\hi');
            echo '<h1>'. $item->title.'</h1>';
            echo '('.$date.')';
            echo '<p>'. $item->description. '</p>';?>
            <img src=" <?= $item->enclosure['url']?>">
       <?php }
        echo '</ul>';
        ?>
     
    </body>
</html>
