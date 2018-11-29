<?php
session_start();

  if (isset($_POST['przycisk'])) {
    require_once('./db_vars.php');
    $con = @new mysqli($db_host, $user, $pass, $database);
    if ($con->connect_errno) {
    die('Błędne połączenie');
    echo "Blad";
    }else{
      $con->set_charset('utf8');
    }

    $login = $con->real_escape_string($_POST['login']);
    $haslo = $con->real_escape_string($_POST['haslo']);

$query = "SELECT `id_uzytkownika`, `login`, `haslo`, `email`, `imie`, `nazwisko`, `id_roli` FROM `uzytkownicy` WHERE `login` = '$login' AND `haslo` = $haslo";

$result = $con->query($query);

if($result->num_rows()==0){
  $_SESSION['login-error'] = 'Błędny login lub hasło';
    header('location: ./index.php');
}else{
      $row = $result->fetch_assoc();
    if ($row['id_roli'] == 1) {
      $_SESSION['admin'] = true;
      $_SESSION['zalogowany'] ==true;
    }else if($row['id_roli'] == 2){
      $_SESSION['moderator'] = true;
      $_SESSION['zalogowany'] ==true;
    }else {
      $_SESSION['user'] == true;
      $_SESSION['zalogowany'] ==true;
    }
}

  }else {
    header('location: ./index.php');
  }
 ?>
