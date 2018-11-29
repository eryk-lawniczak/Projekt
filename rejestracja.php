<?php
session_start();

function check($val, $msg){
    $val = trim($val);
    $val = htmlspecialchars($val);
    if (empty($val)) {
      header('location: ./index.php');
      $_SESSION['error'] = $msg;
    }else {
      return ($val);
    }
  }

  function equal($val1, $val2, $msg){
    if($val1 === $val2){
      return true;
    }else {
      header('location: ./index.php');
      $_SESSION['error'] = $msg;
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


        equal($haslo1, $haslo2, 'Hasła muszą być identyczne');

        require_once('./db_vars.php');
        $con = @new mysqli($db_host, $user, $pass, $database);
        if ($con->connect_errno) {
        die('Błędne połączenie');
        echo "Blad";
        }else{
          $con->set_charset('utf8');
        }

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
$_SESSION['po_rejestracji'] = true;
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
