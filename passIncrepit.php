<?php

$pass = 'sheraz';
$new_pass = 'saqib';
$hash_pass =password_hash($pass,PASSWORD_BCRYPT);
$verify_pass = password_verify($pass,$hash_pass);
echo "<br>".$hash_pass;
if($verify_pass){
    echo "<br> user login";
}else{
    echo "<br> user not login";
}

?>