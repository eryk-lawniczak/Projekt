<?php
session_start();
unset($_SESSION['admin']);
unset($_SESSION['moderator']);
unset($_SESSION['user']);
unset($_SESSION['zalogowany']);
session_destroy();
header('location: ./index.php');
 ?>
