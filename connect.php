<?php
  require_once('./db_vars.php');
  $con = @new mysqli($db_host, $user, $pass, $database);
  if ($con->connect_errno) {
    die('Błędne połączenie');
  }else{
    $con->set_charset('utf8');
  }

 ?>
