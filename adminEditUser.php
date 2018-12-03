<?php
session_start();
require_once('./connect.php');
function check($val, $msg){
    $val = trim($val);
    $val = htmlspecialchars($val);
    if (empty($val)) {
      header('location: ./manageUser.php?chuj=');
      $_SESSION['error'] = $msg;
    }else {
      return ($val);
    }
  }
 if(isset($_POST['przycisk'])){
    $msg = "Wartość nie może być pusta";
    $id = $_SESSION['id_u'];
    $imie = check($_POST['imie'],$msg);
    $nazwisko =check($_POST['nazwisko'], $msg);
    $email =check($_POST['email'], $msg);
    $rola =check($_POST['role'], $msg);

    $query = "UPDATE `uzytkownicy` SET `email`='$email',`imie`='$imie',`nazwisko`='$nazwisko',`id_roli`='$rola' WHERE `id_uzytkownika` = '$id'";
    $result = $con->query($query);

    header('location: ./manageUser.php');
    echo "<pre>";
    var_dump($result);
    echo "</pre>";

}else{
    header('location: ./index.php');
}
?>
