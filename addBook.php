<?php
session_start();
    if(isset($_POST['przycisk'])){
        require_once('./connect.php');
        $msg = 'Wprowadź wartości';
        $title = check($_POST['title'], $msg);
        $author = check($_POST['author'], $msg);
        $year = check($_POST['year'], $msg);

        $year = $con->real_escape_string($year);
        $author = $con->real_escape_string($author);
        $title = $con->real_escape_string($title);
        $query = "INSERT INTO `ksiazki`( `tytul`, `autor`, `rok_wydania`) VALUES ('$title','$author','$year')";
        $result = $con->query($query);
        $_SESSION['udalosie'] = "Wspaniale! Nowa ksiażka dodana";
        header('location: ./manageCatalog.php');

    }else{
        header('location: ./index.php');
    }
    function check($val, $msg){
        $val = trim($val);
        $val = htmlspecialchars($val);
        if (empty($val)) {
          
          $_SESSION['error'] = $msg;
          header('location: ./manageCatalog.php');
        }else {
          return ($val);
        }
      }
    
    
      function equal($val1, $val2, $msg){
        if($val1 === $val2){
          return true;
        }else {
            header('location: ./manageCatalog.php');
          $_SESSION['error'] = $msg;
        }
      }
?>