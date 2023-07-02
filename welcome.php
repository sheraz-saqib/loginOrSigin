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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<?php require 'navStyle.php';?>
</head>
<body >
  <?php
  require './component/_nav.php';

  ?>
</body>
<script src="nav.js"></script>
<script>
  let themeInput = document.querySelector('#themeInput'),
  themeContainer = document.querySelector('.Themebtn')
 let body = document.querySelector('body')
 console.log(themeContainer);
themeInput.addEventListener('change',()=>{
 
 if(!themeInput.checked){
  body.classList.remove("welcome_body")
 }else{

   body.classList.add("welcome_body")
 }

})


</script>
</html>
