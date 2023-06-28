<?php
session_start();
require 'conn.php';
if(!$_SESSION['name'] && $_SESSION['name'] !=true ){
    header('location:login.php');
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to my website</title>
<link rel="stylesheet" href="nav.css">
</head>
<body>
  <?php
  require './component/_nav.php';

  ?>
</body>
<script src="nav.js"></script>
</html>
