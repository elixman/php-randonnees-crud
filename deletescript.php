<?php
  include("connect.php");

  $req = $pdo->prepare('DELETE FROM hiking WHERE id= ?');
  $req->execute(array($_GET['id']));

  header("location:delete.php");
?>
