<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Netflux</title>
	<!-- <link rel="stylesheet" href="boot/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>
		<?php include("menu.php") ?>
	</header>
	<main>
		<section>
			<article class="WillHunting">
				<h1>Will Hunting</h1>
                <img height="400" src="https://thumb.canalplus.pro/bddpe/unsafe/1280x720/52831057" alt="Will Hunting">
				<dl>
					<dt>Titre:</dt>
					<dd>Will Hunting</dd>
					<dt>Date de sortie du film:</dt>
					<dd> <time datetime="1998-03-04">4 Mars 1998</time></dd>
					<dt>Nom des acteurs principaux:</dt>
					<dd>Ben Afleck, Matt Damon</dd>
					<dt>Synopsis:</dt>
					<dd> <?php include("synopsis.html") ?></dd>
					<dt>Note:</dt>
					<dd><meter id="Note" min="0" max="5" low="0" high="2.5" optimum="4" value="4.9">4.9/5</meter></dd>
					<dt>Liste d'images:</dt>
					<dd><?php include("galerie.php") ?></dd>
				</dl>
				<button onclick="window.location.href ='https://youtu.be/5m7jTaXvhgM';">Voir la bande d'annonce</button>
			</article>
		</section>
	</main>
	<footer>
		<small> Réalisé par ABEL Luciano le <time datetime="2019-10-14"></time></small>
	</footer>
</body>