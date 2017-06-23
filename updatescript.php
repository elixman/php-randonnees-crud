<?php
  include("connect.php");

    // Variables to get inputs
    $name = $_POST['name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];

  $req = $pdo->prepare("UPDATE hiking SET name=:name, difficulty=:difficulty, distance=:distance, duration=:duration, height_difference=:height_difference WHERE id=?");
  $req->->bindParam(':name',$name);
  $req->->bindParam(':difficulty',$difficulty);
  $req->->bindParam(':distance',$distance);
  $req->->bindParam(':duration',$duration);
  $req->->bindParam(':height_difference',$height_difference);

  $req->execute();
  
  //print_r($pdo->errorInfo());
  header('location:update.php');
?>
