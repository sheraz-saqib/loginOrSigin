<?php
session_start();

if(!$_SESSION['name'] && $_SESSION['name'] !=true ){
    header('location:login.php');
}

echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
echo $_SESSION['contact'];

echo "<br>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">logout </a>
</body>
</html>
