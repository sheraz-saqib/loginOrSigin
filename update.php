<?php

require 'conn.php';

$id = $_GET['idUpdate'];
$name = $_GET['nameUpdate'];
$contact = $_GET['contactUpdate'];
$email = $_GET['emailUpdate'];
$str_pass = password_hash($pass,PASSWORD_BCRYPT);
$submit = $_GET['submitUpdate'];
$notification = false;

session_start();
session_unset();
session_destroy();

if(isset($submit)){
if($name != '' && $contact != '' && $email != ''){
    $insertQuery = "UPDATE `user` SET `id`='$id',`name`='$name',`contact`='$contact',`email`='$email' WHERE id=$id";
    $result = mysqli_query($conn,$insertQuery);
    if($result){
      $selectQ =  "SELECT * FROM `user` WHERE `email` ='$email'";
      $select = mysqli_query($conn,$selectQ);
      $result = mysqli_fetch_array($select);
      session_start();
       $_SESSION['name'] = $result[1];
       $_SESSION['email'] = $result[2];
       $_SESSION['contact'] = $result[4];
       header('location:welcome.php');
      }

}

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>update user</title>
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="update.css" />
  </head>
  <body>


    
</body>

<script>
    const   eye_icon = document.getElementById("eye_icon"),
  notification = document.querySelectorAll('.notification'),
  eye_slash = document.querySelector('.fa-eye-slash');
    notification.forEach((crr)=>{
 let  cross_icon = crr.querySelector('.cross_icon i');
 cross_icon.addEventListener('click',()=>{
   window.location.assign('welcome.php');
  })
})
const eyeFuntion = ()=>{
    pass.type == 'password' ? pass.type = 'text' : pass.type = 'password';
    eye_icon.classList.toggle('eye_show');
    eye_slash.classList.toggle('eye_slash_hide');
}

eye_icon.addEventListener('click',()=>{
   eyeFuntion()
})
eye_slash.addEventListener('click',()=>{
    eyeFuntion()
})
</script>
</html>
