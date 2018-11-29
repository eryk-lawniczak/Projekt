<?php
session_start();

function check($val, $msg){
    $val = trim($val);
    $val = htmlspecialchars($val);
    if (empty($val)) {
      header('location: ./index.php?pustawartosc=');
      $_SESSION['error'] = $msg;
      
    }else {
      return ($val);
    }
  }

  function equal($val1, $val2, $msg){
    if($val1 === $val2){
      return true;
    }else {
      header('location: ./index.php?notequal=');
      
      return false;
    }
  }

    if(isset($_POST['przycisk']) ){

       if(isset($_POST['zgoda']) && $_POST['zgoda'] == true){
        $msg = 'Wypełnij wszytkie pola';
        $imie = check($_POST['imie'], $msg);
        $nazwisko = check($_POST['nazwisko'], $msg);
        $haslo1 = check($_POST['haslo1'], $msg);
        $haslo2 = check($_POST['haslo2'], $msg);
        $login = check($_POST['login'], $msg);
        $email = check($_POST['email'], $msg);


       if(!equal($haslo1, $haslo2, 'Hasła muszą być identyczne')){ 
        $_SESSION['error'] = 'Hasła muszą być identyczne';
         header('location: ./index.php?notequal=');
         exit;
       }
        require_once('./connect.php');

        $imie = $con->real_escape_string($imie);
        $nazwisko = $con->real_escape_string($nazwisko);
        $email = $con->real_escape_string($email);
        $pass = $con->real_escape_string($haslo1);
        $login = $con->real_escape_string($login);

        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $query = "SELECT `email`, `login` FROM `uzytkownicy` WHERE 'email' = '$email' AND `login` = '$login' ";

        $result = $con->query($query);
        if ($result->num_rows == 0) {
          $query = "INSERT INTO `uzytkownicy` ( `login`, `haslo`, `email`, `imie`, `nazwisko`, `id_roli`) VALUES ( '$login', '$pass', '$email', '$imie', '$nazwisko', 3);";

          $con->query($query);
          
          header('location: ./index.php');

        }else {
          header('location: ./index.php');
          $_SESSION['error'] = 'Podany email jest zajęty';
        }
       }else{
        header('location: ./index.php');
        $_SESSION['error'] = 'Zaakceptuj zgodę';
       }

    }else{
        header('location: index.php');
    }
?>
