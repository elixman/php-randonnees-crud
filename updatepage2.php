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
      <title>Modifier une randonnée</title>
  </head>
<body>
	<?php
		include("navbar.php")
	?>
	<?php
		include("connect.php");
		$id= $_GET['id'];

		// var_dump($id);

	$req = $pdo->prepare("SELECT * FROM hiking WHERE id= $id");
	$req->execute();
	if($req->rowCount() > 0)
	{
		$difficutlyselect = array("tres facile", "facile", "moyen", "difficile", "tres difficile");

		while ($row=$req->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			<section class="createsection">
			<a href="/php-pdo/read.php">Liste des randonnées</a>
			<h1>Modifier</h1>
			<form class="ui form" action="" method="post">
				<div>
					<label for="name">Name</label>
					<input type="text" name="name" value="<?php echo $name."&nbsp;&nbsp;".$hiking; ?>">
				</div>

				<div>
					<label for="difficulty">Difficulté</label>
					<select name="difficulty" value="<?php echo $difficulty."&nbsp;&nbsp;".$hiking; ?>">
						<?php
							foreach ($difficutlyselect as $selectvalue) {
								?>
										<option value="<?= $selectvalue ?>" <?php
												if ($difficulty === $selectvalue){
													echo "selected";
												}
										 ?> ><?= $selectvalue ?></option>
								<?php
							}
						 ?>
					</select>
				</div>

				<div>
					<label for="distance">Distance</label>
					<input type="text" name="distance" value="<?php echo $distance."&nbsp;&nbsp;".$hiking; ?>">
				</div>
				<div>
					<label for="duration">Durée</label>
					<input type="duration" name="duration" value="<?php echo $duration."&nbsp;&nbsp;".$hiking; ?>">
				</div>
				<div>
					<label for="height_difference">Dénivelé</label>
					<input type="text" name="height_difference" value="<?php echo $height_difference."&nbsp;&nbsp;".$hiking; ?>">
				</div></br>
				<button class="ui button" type="button" name="button" href='updatescript.php?id=".$value->id."'>Modifier</button>
			</form>
		</section>
			<?php
		}
	}
	else
	{
		?>
  		<p>Aucune donnée trouvée...</p>
        <?php
	}
?>
</body>
</html>
