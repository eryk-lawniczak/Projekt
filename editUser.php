<?php 
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
    $login = $_POST['login'];
    //zmiana hasla
    if(isset($_POST['pass'])){
        $msg = "Pole nie może być puste";
        $pass = check($_POST['oldPass'], $msg);
        $newpass = check($_POST['newPass'], $msg);
        $confpass = check($_POST['confPass'], $msg);
        

        $queryhash = "SELECT `login`, `haslo` FROM `uzytkownicy` WHERE `login` = '$login'";  
        $resultHash = $con->query($queryhash);
        if($resultHash->num_rows == 1)
        while($rowHash = $resultHash->fetch_assoc()){
        $hash = $rowHash['haslo'];
        }
    
        if(password_verify($pass, $hash)){
            if(equal($newpass, $confpass)){
                $newpass = password_hash($newpass, PASSWORD_DEFAULT);
            $query = "UPDATE `uzytkownicy` SET `haslo`='$newpass' WHERE `login` = '$login'";
            header('location: ./panelUser.php');
            }else{
            $_SESSION['error'] = "Hasla muszą być identyczne";
            header('location: ./panelUser.php');
            }
        }else{
            $_SESSION['error'] = "Niepoprawne haslo";
            header('location: ./panelUser.php');
        }
    }else
    //zmiana danych
    if(isset($_POST['przycisk'])){
        $msg = "Wartość nie może być pusta";
        $imie = check($_POST['imie'],$msg);
        $nazwisko =check($_POST['nazwisko'], $msg);
        $email =check($_POST['email'], $msg);

        $query = "UPDATE `uzytkownicy` SET `email`='$email',`imie`='$imie,`nazwisko`='$nazwisko', WHERE `login` = '$login'";
        $con->query($query);
        header('location: ./panelUser.php');

    }

}else{
    header('location: ./index.php');
}
?>