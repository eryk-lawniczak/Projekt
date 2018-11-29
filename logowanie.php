<?php
session_start();
unset($_SESSION['po_rejestracji']);
  if (isset($_POST['przycisk'])) {
    require_once('./connect.php');

    $login = $con->real_escape_string($_POST['login']);
    $haslo = $con->real_escape_string($_POST['haslo']);
    
$queryhash = "SELECT `login`, `haslo` FROM `uzytkownicy` WHERE `login` = '$login'";  
$resultHash = $con->query($queryhash);
while($rowHash = $resultHash->fetch_assoc()){
  $hash = $rowHash['haslo'];
}

$_SESSION['login'] = $login;


if(password_verify($haslo, $hash)){
  $query = "SELECT `id_uzytkownika`, `login`, `haslo`, `email`, `imie`, `nazwisko`, `id_roli` FROM `uzytkownicy` WHERE `login` = '$login' AND `haslo` = '$hash'";
  $result = $con->query($query);

}else{
  $_SESSION['login-error'] = 'Błędne hasło';
  header("location: ./index.php");
}




if($result->num_rows == 0){
  $_SESSION['login_error'] = 'Błędny login lub hasło';
    header("location: ./index.php");
}else{
      $row = $result->fetch_assoc();
    if ($row['id_roli'] == 1) {
      $_SESSION['admin'] = $login;
      $_SESSION['zalogowany'] =true;
      header('location: ./index.php');
    }else {
      $_SESSION['user'] = $login;
      $_SESSION['zalogowany'] =true;
      header('location: ./index.php');
    }
}

  }else {
  header('location: ./index.php');
   
   }
 ?>