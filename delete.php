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
      <title>Randonnées</title>
  </head>
<body>
	<?php
		include("navbar.php")
	?>
  <h1>Supprimer une randomnée</h1>
  <table>
    <?php
        include("connect.php");

        $hiking = $pdo->query('SELECT * FROM hiking');
        $allhikings = $hiking->fetchAll();
        // var_dump($fullpublication);
        foreach ($allhikings as $value) {
            echo "<div class='createsection'>
                    <p>Randonnée : ".$value->name."</p>
                    <p>Difficultée : ".$value->difficulty."</p>
                    <p>Distance : ".$value->distance."</p>
                    <p>Durée : ".$value->duration."</p>
                    <p>Dénivelé : ".$value->height_difference."</p></br>
                    <a class='ui red button' href='deletescript.php?id=".$value->id."' onclick='return confirmDeletion()'>Supprimer</a>
                  </div>";
        }
      ?>
  </table>
  <script>
        function confirmDeletion(){
          var confirmedDeletion = confirm("Vous allez supprimer cette randomnée de manière définitive. Désirez-vous continuer?");
          return confirmedDeletion;
        }
      </script>
</body>
</html>
