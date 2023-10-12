<?php
require(__DIR__.'/header.php');


//    if (isset($_SESSION["is_login"]) && $_SESSION['is_login']==1) {
//        include(__DIR__.'/home.php');
    
 //   } else{
    require(__DIR__.'/main.php');

if(!isset($_SESSION['is_login']) && $_SESSION['is_login']!=1){
    require(__DIR__.'/login.php');
    require(__DIR__.'/signup.php');
}   else {
    require(__DIR__.'/users.php');
}
 //   }
?>

<?
require(__DIR__.'/footer.php');
?>