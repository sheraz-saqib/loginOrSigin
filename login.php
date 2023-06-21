<?php

require 'conn.php';



session_start();






$email = $_POST['email'];
$pass = $_POST['pass'];
$submit = $_POST['submit'];
//get password======
$get_passQ = "SELECT `password` FROM `user`";
$get_pass = mysqli_query($conn,$get_passQ);
//get email=======
$get_emailQ = "SELECT `email` FROM `user` WHERE  email = '$email'";
$get_email = mysqli_query($conn,$get_emailQ);
$get_email_arr =  mysqli_fetch_assoc($get_email);
$final_email = $get_email_arr['email'];

if(isset($submit)){
    while($data =  mysqli_fetch_assoc($get_pass)){
        $VERIFY_PASS = password_verify($pass,$data['password']);
        if(($data['password'] && $VERIFY_PASS) == 1){
            $check_pass = true;
        }
    }
    if($email !== ''  && $pass !== '' && $email == $final_email && $pass == $check_pass){
       $selectQ =  "SELECT * FROM `user` WHERE `email` ='$email'";
       $select = mysqli_query($conn,$selectQ);
       $result = mysqli_fetch_array($select);
        $_SESSION['name'] = $result[1];
        $_SESSION['email'] = $result[2];
        $_SESSION['contact'] = $result[4];
        header('location:welcome.php');
}
if($email == ''  && $pass == '' && $email != $final_email && $pass != $check_pass)
{
  $notification = true;
}
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login form</title>
   
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

    if($notification){
        echo "<div class='notification'>
        <div class='message danger'>
          <h2>failed!</h2>
          <p>Login failed incorrect email or password </p>
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
        <h2><span>log</span>in <span>Fo</span>rm</h2>
      </header>
      <form action="login.php" method="POST" class="form" id="form">
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
