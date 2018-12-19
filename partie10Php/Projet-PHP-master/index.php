<?php
	$xml = simplexml_load_file('source.xml');
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
	$id--;
	$page = $xml->page[$id];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Accueil - Maçonnerie Ocordo</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css"/>
    </head>
    <header>
		<nav class="navbar navbar-expand-lg navbar-dark">
            <a href="#" class="navbar-brand"><img src="assets/img/logo3.png" alt="" width="130" height="100"></a>
            <button class="navbar-toggler" type="button" data-target="#navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
				<?php
					$fichier = 'source.xml';
					$xml = simplexml_load_file($fichier);
					$nbPages = count($xml->page);
					for($i = 0; $i < $nbPages; $i++){
				?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="?id=<?= $i+1; ?>" class="nav-link"><?php echo $xml->page[$i]->menu; ?></a>
                    </li>
				</ul>
				<?php } ?>
            </div>
        </nav>
	</header>
    <body>
		<?php
			//echo $page->menu;
			echo $page->content;
        ?>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
	<!-- FOOTER -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Liens utiles</h5>
					<ul class="list-unstyled quick-links">
						<li>
							<a href="javascript:void();">
								<i class="fa fa-angle-double-right"></i>
								Accueil
							</a>
						</li>
						<li>
							<a href="http://localhost/PHP/Projet-PHP-master/mentionleg.php" title="Design and developed by">
								<i class="fa fa-angle-double-right"></i>
								Mentions légales
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item">
							<a href="https://www.facebook.com/Agence-Ocordo-Travaux-123901887644073/">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.linkedin.com/company/ocordo-travaux/">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="javascript:void();" target="_blank">
								<i class="fa fa-envelope"></i>
							</a>
						</li>
					</ul>
				</div>
				<hr/>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
						<p>
							<u>
								<a href="https://www.nationaltransaction.com/">
									National Transaction Corporation
								</a>
							</u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]
						</p>
						<p class="h6">
							&copy All right Reversed.
							<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">
								Sunlimetech
							</a>
						</p>
					</div>
				<hr/>
			</div>
		</div>
	</section>
	<!-- FIN FOOTER -->
</html>
