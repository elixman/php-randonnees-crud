<?php
  include("connect.php");

    // Variables to get inputs
    $name = $_POST['name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];

  $req = $pdo->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference)
  VALUES (:name, :difficulty, :distance, :duration, :height_difference)");
  $req->execute(array(
      'name' => $name,
      'difficulty' => $difficulty,
      'distance' => $distance,
      'duration' => $duration,
      'height_difference' => $height_difference
  ));

  //print_r($pdo->errorInfo());
  header('location:read.php');
?>
