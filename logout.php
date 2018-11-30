<?php
if(isset($_GET['logingout'])){
    session_start();
unset($_SESSION['admin']);
unset($_SESSION['moderator']);
unset($_SESSION['user']);
unset($_SESSION['zalogowany']);
unset($_SESSION['login']);
session_destroy();
header('location: ./index.php?loggedout=');
}
else{
    header('location: ./index.php?ochujchdpozi=');
}
 ?>
