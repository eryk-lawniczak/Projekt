<?php
session_start();
    if(isset($_POST['przycisk'])){
        require_once('./connect.php');
        $msg = 'Wprowadź wartości';
        $heading = check($_POST['heading'], $msg);
        $content = check($_POST['content'], $msg);

        $heading = $con->real_escape_string($heading);
        $content = $con->real_escape_string($content);
        $query = "INSERT INTO `news` ( `naglowek`, `tresc`) VALUES ( '$heading', '$content');";
        $con->query($query);
        $_SESSION['udalosie'] = "Wspaniale! Nowy news dodany";
        header('location: ./manageNews.php');

    }else{
        header('location: ./index.php');
    }
    function check($val, $msg){
        $val = trim($val);
      
        if (empty($val)) {
          
          $_SESSION['error'] = $msg;
          header('location: ./manageNews.php');
        }else {
          return ($val);
        }
      }
    
    
      function equal($val1, $val2, $msg){
        if($val1 === $val2){
          return true;
        }else {
            header('location: ./manageNews.php');
          $_SESSION['error'] = $msg;
        }
      }
?>