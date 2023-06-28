<?php

require 'conn.php';
$id = $_GET['id'];
// $notification = $_GET[false];
// $trueNotif = $_GET[true];
$selectQ = "SELECT `id`, `name`, `contact`, `email` FROM `user` WHERE id=$id;";
$select = mysqli_query($conn,$selectQ);
$result = mysqli_fetch_array($select);

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
    ?>
    <!-- notification -->
    <div class="container">
      <header>
        <h2><span>Up</span>date <span>us</span>er</h2>
      </header>
      <form action="update.php?id=<?= $id?>" method="GET"  class="form" id="form">
        <!-- row -->
        <div class="row">
          <div class="row_left">
            <!-- <h3>id</h3> -->
            <input hidden type="text" id="id" name="idUpdate" placeholder="id" readonly value="<?=$id?>">
          </div>
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row">
          <div class="row_left">
            <h3>first name</h3>
            <input type="text" id="name" name="nameUpdate" placeholder="first name"value="<?=$result['name']?>" />
          </div>
          <div class="row_right">
            <h3>contact</h3>
            <input
              type="number"
              name="contactUpdate"
              id="contact"
              placeholder="contact"
              value="<?=$result['contact']?>"
            />
          </div>
        </div>
        <!-- row -->
        <!-- row -->
        <div class="row">
          <div class="row_left">
            <h3>email</h3>
            <input type="email" name="emailUpdate" id="email" placeholder="email" value="<?=$result['email']?>"/>
          </div>
        </div>
        <!-- row -->

        <!-- row -->
        <div class="btn">
          <button type="submit" id="submit" name="submitUpdate" class="Submit_btn">
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
