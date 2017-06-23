<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.min.css">
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
      <title>php-randonnees-crud</title>
  </head>
  <body>
    <?php
      include("navbar.php")
    ?>
    <section>
      <div class="fotorama"
          data-width="70%"
          data-ratio="800/600"
          data-transition="crossfade"
          data-autoplay="true">
        <img src="images/slide1.jpg">
        <img src="images/slide2.jpg">
        <img src="images/slide3.jpg">
        <img src="images/slide4.jpg">
        <img src="images/slide5.jpg">
        <img src="images/slide6.jpg">
        <img src="images/slide7.jpg">
        <img src="images/slide8.png">
      </div>
    </section>
  </body>
</html>
