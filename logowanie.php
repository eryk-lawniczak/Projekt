<?php
session_start();
unset($_SESSION['po_rejestracji']);
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
    
$queryhash = "SELECT `login`, `haslo` FROM `uzytkownicy` WHERE `login` = '$login'";  
$resultHash = $con->query($queryhash);
while($rowHash = $resultHash->fetch_assoc()){
  $hash = $rowHash['haslo'];
}


if(password_verify($haslo, $hash)){
  $query = "SELECT `id_uzytkownika`, `login`, `haslo`, `email`, `imie`, `nazwisko`, `id_roli` FROM `uzytkownicy` WHERE `login` = '$login' AND `haslo` = '$hash'";
  $result = $con->query($query);

}else{
  $_SESSION['login-error'] = 'Błędne hasło';
  header("location: ./index.php");
}




if($result->num_rows == 0){
  $_SESSION['login-error'] = 'Błędny login lub hasło';
    header("location: ./index.php?queryerr=");
}else{
      $row = $result->fetch_assoc();
    if ($row['id_roli'] == 1) {
      $_SESSION['admin'] = true;
      $_SESSION['zalogowany'] =true;
      header('location: ./index.php?admin=');
    }else if($row['id_roli'] == 2){
      $_SESSION['moderator'] = true;
      $_SESSION['zalogowany'] =true;
      header('location: ./index.php?moderator=');
    }else {
      $_SESSION['user'] == true;
      $_SESSION['zalogowany'] =true;
      header('location: ./index.php?user=');
    }
}

  }else {
  header('location: ./index.php?bezprzycisku=');
   
   }
 ?>