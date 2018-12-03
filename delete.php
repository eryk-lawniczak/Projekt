<?php
session_start();
if(isset($_GET['id']) || isset($_POST['id'])){
    $id = $_GET['id'];
    if(isset($_POST['id'])) $id = $_POST['id'];

    require_once('./connect.php');
    $query = "DELETE FROM `uzytkownicy` WHERE `id_uzytkownika` = '$id'";

    $con->query($query);
    if(isset($_SESSION['panelAdmin'])){
        header('location: ./manageUser.php');
        var_dump($_SESSION);
    }else
    header('location: ./logout.php?logingout=');
}else{
    header('location: ./index.php?chujwieco=');
}



?>
