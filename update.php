<?php

require 'conn.php';
$id = $_GET['idUpdate'];
$name = $_GET['nameUpdate'];
$contact = $_GET['contactUpdate'];
$email = $_GET['emailUpdate'];
$pass = $_GET['passUpdate'];
$str_pass = password_hash($pass,PASSWORD_BCRYPT);
$submit = $_GET['submitUpdate'];
$notification = false;

if(isset($submit)){
if($name != '' && $contact != '' && $email != '' && $pass != ''){
    $insertQuery = "UPDATE `user` SET `id`='$id',`name`='$name',`contact`='$contact',`email`='$email',`password`='$str_pass' WHERE id=$id";
    $result = mysqli_query($conn,$insertQuery);

}}

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

  <!-- <?php
    if(!$conn){
        echo "<div class='notification'>
        <div class='not_inline'>
         <div class='message success'>
             <h2>success!</h2>
             <p>New data has been updated</p>
           </div>
           <div class='cross_icon'>
             <i class='fa-solid fa-xmark'></i>
           </div>
        </div>
         <div class='updateInfo'>
              <!-- row -->
         <div class='row'>
             <div class='row_left'>
               <h3>first name</h3>
               <input type='text' id='name' name='nameUpdate' placeholder='first name' value='<?=$name?>'' readonly/>
             </div>
             <div class='row_right'>
               <h3>contact</h3>
               <input
                 type='number'
                 name='contactUpdate'
                 id='contact'
                 placeholder='contact'
                 value='<?=$contact?>'
                 readonly
               />
             </div>
           </div>
           <!-- row -->
            <!-- row -->
         <div class='row'>
             <div class='row_left'>
               <h3>email</h3>
               <input type='email' name='emailUpdate' id='email' placeholder='email' value='<?=$email?>' readonly/>
             </div>
             <div class='row_right password_field'>
               <h3>password</h3>
               <input
                 type='password'
                 name='passUpdate'
                 id='ass'
                 placeholder='password'
                 value='<?=$pass?>''
                 readonly
               />
               <i class='fa-solid fa-eye-slash eye_slash_hide'></i>
               <i id='eye_icon' class='fa-solid fa-eye'></i>
             </div>
           </div>
           <!-- row -->
         </div>
       </div>";
    }
    if($result){
        echo "<div class='notification'>
        <div class='message success'>
          <h2>success!</h2>
          <p>Your data has updated</p>
        </div>
        <div class='cross_icon'>
          <i class='fa-solid fa-xmark'></i>
        </div>
      </div>";
    }if(!$result){
        echo "<div class='notification'>
        <div class='message danger'>
          <h2>failed!</h2>
          <p>Your data has not updated</p>
        </div>
        <div class='cross_icon'>
          <i class='fa-solid fa-xmark'></i>
        </div>
      </div>";
    }
    ?> -->
    <div class='notification'>
       <div class="not_inline">
        <div class='message success'>
            <h2>success!</h2>
            <p>New data has been updated</p>
          </div>
          <div class='cross_icon'>
            <i class='fa-solid fa-xmark'></i>
          </div>
       </div>
        <div class="updateInfo">
             <!-- row -->
        <div class="row">
            <div class="row_left">
              <h3>first name</h3>
              <input type="text" id="name" name="nameUpdate" placeholder="first name" value="<?=$name?>" readonly/>
            </div>
            <div class="row_right">
              <h3>contact</h3>
              <input
                type="number"
                name="contactUpdate"
                id="contact"
                placeholder="contact"
                value="<?=$contact?>"
                readonly
              />
            </div>
          </div>
          <!-- row -->
           <!-- row -->
        <div class="row">
            <div class="row_left">
              <h3>email</h3>
              <input type="email" name="emailUpdate" id="email" placeholder="email" value="<?=$email?>" readonly/>
            </div>
            <div class="row_right password_field">
              <h3>password</h3>
              <input
                type="password"
                name="passUpdate"
                id="pass"
                placeholder="password"
                value="<?=$pass?>"
                readonly
              />
              <i class="fa-solid fa-eye-slash eye_slash_hide"></i>
              <i id="eye_icon" class="fa-solid fa-eye"></i>
            </div>
          </div>
          <!-- row -->
        </div>
      </div>
</body>

<script>
    const   eye_icon = document.getElementById("eye_icon"),
  notification = document.querySelectorAll('.notification'),
  eye_slash = document.querySelector('.fa-eye-slash');
    notification.forEach((crr)=>{
 let  cross_icon = crr.querySelector('.cross_icon i');
 cross_icon.addEventListener('click',()=>{
   window.location.assign('showData.php');
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
