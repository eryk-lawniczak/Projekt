<?php 
session_start();
require_once('./connect.php');
function check($val, $msg){
    $val = trim($val);
    $val = htmlspecialchars($val);
    if (empty($val)) {
      header('location: ./catalog.php?chuj=');
      $_SESSION['error'] = $msg;
    }else {
      return ($val);
    }
  }
 if(isset($_POST['przycisk'])){
    $msg = "Wartość nie może być pusta";
    $id = $_SESSION['edit'];
    $title = check($_POST['title'],$msg);
    $author =check($_POST['author'], $msg);
    $year =check($_POST['year'], $msg);
    

    $sql = "UPDATE `ksiazki` SET `tytul` = '$title', `autor` = '$author', `rok_wydania` = '$year' WHERE `ksiazki`.`id_ksiazki` = '$id'";
    $result = $con->query($sql);
    header('location: ./catalog.php');
  
    //
   echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

}else{
    header('location: ./index.php');
}
?>