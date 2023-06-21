<?php

require 'conn.php';






















$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$submit = $_POST['submit'];
$str_pass = password_hash($pass,PASSWORD_BCRYPT);
// $notification = false;
$nameError = false;
$notificationError = false;
if(isset($submit)){
  $selectQ = "SELECT * FROM `user` WHERE name = '$name'";
  $select = mysqli_query($conn,$selectQ);
  $checkName = mysqli_num_rows($select);

  // ======================
  if($name !='' && $email != '' && $contact != '' && $pass !=''){
    
    if(!$checkName ){
      $insertQ = "INSERT INTO `user`( `name`, `email`, `password`, `contact`) VALUES ('$name','$email','$str_pass','$contact')";
      $result = mysqli_query($conn,$insertQ);
      if($result){
        $notificationSuccess = true;
        header('location:login.php');
      } 
    }
   
    else{
      $nameError = true;
    }
    
  }

  if($name =='' && $email =='' && $contact == '' && $pass ==''){
$notificationError = true;
  }
  // =====================

}








?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register form</title>
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- notification -->
    <?php
    if(!$conn){
        echo "<div class='notification'>
        <div class='message danger'>
          <h2>connection failed!</h2>
          <p>Your connection problem please try again.</p>
        </div>
        <div class='cross_icon'>
          <i class='fa-solid fa-xmark'></i>
        </div>
      </div>";
    }
    if($notificationSuccess){
        echo "<div class='notification'>
        <div class='message success'>
          <h2>success!</h2>
          <p>Your registeration has submitted</p>
        </div>
        <div class='cross_icon'>
          <i class='fa-solid fa-xmark'></i>
        </div>
      </div>";
    }
    
    if($notificationError){
      echo "<div class='notification'>
      <div class='message danger'>
        <h2>failed!</h2>
        <p>Your registeration failed please fill all fields and try again</p>
      </div>
      <div class='cross_icon'>
        <i class='fa-solid fa-xmark'></i>
      </div>
    </div>";
  }
    if($nameError){
      echo "<div class='notification'>
      <div class='message danger'>
        <h2>failed!</h2>
        <p>Name already be taken </p>
      </div>
      <div class='cross_icon'>
        <i class='fa-solid fa-xmark'></i>
      </div>
    </div>";
  }

    ?>
    <!-- notification -->
    <div class="container">
      <header>
        <h2><span>Regis</span>teration <span>Fo</span>rm</h2>
      </header>
      <form action="signin.php" method="POST" class="form" id="form">
        <!-- row -->
        <div class="row">
          <div class="row_left">
            <h3>first name</h3>
            <input type="text" id="name" name="name" placeholder="first name" />
          </div>
          <div class="row_right">
            <h3>contact</h3>
            <input
              type="number"
              name="contact"
              id="contact"
              placeholder="contact"
            />
          </div>
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row">
          <div class="row_left">
            <h3>email</h3>
            <input type="email" name="email" id="email" placeholder="email" />
          </div>
          <div class="row_right password_field">
            <h3>password</h3>
            <input
              type="password"
              name="pass"
              id="pass"
              placeholder="password"
            />
            <i class="fa-solid fa-eye-slash eye_slash_hide"></i>
            <i id="eye_icon" class="fa-solid fa-eye"></i>
          </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="btn">
          <button type="submit" id="submit" name="submit" class="Submit_btn">
            submit <i class="fa-solid fa-check"></i>
          </button>
        </div>
      </form>
    </div>

    <!-- ================================================================================================ -->
    <!-- ================================================================================================ -->
    <!-- ================================================================================================ -->
    <!-- ================================================================================================ -->
    <!-- ================================================================================================ -->
  </body>
  <script src="app.js"></script>
</html>
