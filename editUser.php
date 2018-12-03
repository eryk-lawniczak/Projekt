<?php
session_start();
function check($val, $msg){
    $val = trim($val);
    $val = htmlspecialchars($val);
    if (empty($val)) {
      header('location: ./panelUser.php');
      $_SESSION['error'] = $msg;
    }else {
      return ($val);
    }
  }


  function equal($val1, $val2, $msg){
    if($val1 === $val2){
      return true;
    }else {
      header('location: ./panelUser.php');
      $_SESSION['error'] = $msg;
    }
  }

if(isset($_POST['pass']) || isset($_POST['przycisk'])){
    require_once('./connect.php');
    $login = $_SESSION['user'];
    //zmiana hasla
        //hashowane haslo
        $queryhash = "SELECT `login`, `haslo` FROM `uzytkownicy` WHERE `login` = '$login'";
        $resultHash = $con->query($queryhash);
        $rowHash = $resultHash->fetch_assoc();
        $hash = $rowHash['haslo'];


    if(isset($_POST['pass'])){
        $msg = 'Pola nie mogą być puste';
        $oldPass = check($_POST['oldPass'],$msg);
        $newPass = check($_POST['newPass'],$msg);
        $confPass = check($_POST['confPass'],$msg);

        $oldPass = $con->real_escape_string($oldPass);
        $newPass = $con->real_escape_string($newPass);
        $confPass = $con->real_escape_string($confPass);

        if(password_verify($oldPass, $hash)){
            equal($newPass,$confPass, 'Hasla muszą być takie same');
            $pass = password_hash($newPass, PASSWORD_DEFAULT);

            $query = "UPDATE `uzytkownicy` SET `haslo` = '$pass' WHERE `uzytkownicy`.`login` = '$login';";
            $con->query($query);
           header('location: ./logout.php?logingout=');

        }else{
            //stare haslo niepoprawne
            header('location: ./panelUser.php');
            $_SESSION['error'] = "Haslo niepoprawne";
        }
}

    else
    //zmiana danych
    if(isset($_POST['przycisk'])){
        $msg = "Wartość nie może być pusta";
        $imie = check($_POST['imie'],$msg);
        $nazwisko =check($_POST['nazwisko'], $msg);
        $email =check($_POST['email'], $msg);

        $query = "UPDATE `uzytkownicy` SET `email` = '$email', `imie` = '$imie', `nazwisko` = '$nazwisko'  WHERE `uzytkownicy`.`login` = '$login';";
        $con->query($query);
        header('location: ./panelUser.php');

    }

}else{
    header('location: ./index.php');
}
?>
