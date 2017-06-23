<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.min.css">
			<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
      <link rel="stylesheet" href="style.css" />
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
      <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
      <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
      <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
      <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
      <title>Ajouter une randonnée</title>
  </head>
<body>
	<?php
		include("navbar.php")
	?>
	<section class="createsection">
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form class="ui form" action="createscript.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="tres facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="tres difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div></br>
		<button class="ui button" type="submit" name="button">Valider</button>
	</form>
</section>
</body>
</html>
