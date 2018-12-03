<?php 
session_start();
require_once('./connect.php');
function check($val, $msg){
    $val = trim($val);
    
    if (empty($val)) {
      header('location: ./index.php?chuj=');
      $_SESSION['error'] = $msg;
    }else {
      return ($val);
    }
  }
 if(isset($_POST['przycisk'])){
    $msg = "Wartość nie może być pusta";
    $id = $_SESSION['id'];
    $heading = check($_POST['heading'],$msg);
    $content =check($_POST['content'], $msg);
    
    
    $heading = $con->real_escape_string($heading);
    $content = $con->real_escape_string($content);
  

    $sql = "UPDATE `news` SET `naglowek`='$heading',`tresc`=' $content' WHERE `id_news` = '$id'";
    $result = $con->query($sql);
    header('location: ./index.php');
  
    //
   echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

}else{
    header('location: ./index.php');
}
?>