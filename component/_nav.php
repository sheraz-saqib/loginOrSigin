 <?php
//   $login= false;
 if(!$_SESSION['name'] && $_SESSION['name'] !=true ){
  
}
$login = true;
 $name = $_SESSION['name'];
$selectQ = "SELECT * FROM `user` WHERE `name`= '$name'";

$select = mysqli_query($conn,$selectQ);
$data = mysqli_fetch_assoc($select);

 ?>
 
 <!-- navbar -->



 <header class="header">
    <nav class="navBar">
    <!-- menu -->
    <div class="menu ">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <!-- menu -->

    <!-- =================== -->
    <!-- logo -->
    <div class="logo">
        <a href="#"><h2>company name</h2></a>
    </div>
    <!-- logo -->
    <!-- links -->
    <div class="links ">
    
        <ul class="nav_ul">
            <li class="nav_li"><a class="nav_links" href="#">home</a></li>
            <li class="nav_li "><a class="nav_links" href="#">projects</a></li>
            <li class="nav_li  drop_down_li res_drop_li"><a class="nav_links" href="#">categories
                <div class="drop_down res_drop drop_down_toggle">
                    <ul class="dd_ul">
                     <li class="dd_li "><a href="#" class="dd_links">1 drop down</a></li>
                     <li class="dd_li "><a href="#" class="dd_links">2 drop down</a></li>
                     <li class="dd_li "><a href="#" class="dd_links">3 drop down</a></li>
                    </ul>
                 </div>
            </a></li>
            <li class="nav_li drop_down_li res_drop_li "><a class="nav_links" href="#">
                more
<div class="drop_down res_drop drop_down_toggle">
   <ul class="dd_ul">
    <li class="dd_li"><a href="#" class="dd_links">1 drop down</a></li>
    <li class="dd_li"><a href="#" class="dd_links">2 drop down</a></li>
    <li class="dd_li"><a href="#" class="dd_links">3 drop down</a></li>
   </ul>
</div>
            </a></li>
        </ul>
    </div>
    <!-- links -->
</nav>
    <!-- ======================== -->
    <div class="other_components">
        <div class="shop_icon">
           
           <li class="nav_li drop_down_li res_drop_li "><a class="" href="#">
            <div class="profile_li">

            <img src="./img/Profile-1.webp" alt="">profile

            </div>
<?php

if($login){
    echo '<div class="drop_down res_drop drop_down_toggle">
    <ul class="dd_ul">
     <li class="dd_li"><a href="#" class="dd_links">'.$_SESSION['name'].'</a></li>
     <li class="dd_li"><a href="edit.php?id='.$data['id'].'" class="dd_links">eidt profile</a></li>
     <li class="dd_li"><a href="#" class="dd_links logout_btn">logout</a></li>
    </ul>
    </div>';
}

?>
            </a></li>
        </div>
    </div>

</header>

    <!-- navbar -->