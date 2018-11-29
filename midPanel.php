<?php
if(isset($_GET['gut'])){
    session_start();

    if(isset($_SESSION['admin'])){
        header('location: ./panelAdmin.php');
    }elseif(isset($_SESSION['user'])){
        header('location: ./panelUser.php');
    }else{
        header('location: ./index.php?brakuzytkownika=');
    }
    
}else{
    header('location: ./index.php');
}
?>