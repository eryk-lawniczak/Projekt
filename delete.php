<?php 
session_start();
if(isset($_GET['id']) || isset($_POST['id'])){
    $id = $_GET['id'];
    if(isset($_POST['id'])) $id = $_POST['id'];

    require_once('./connect.php');
    $query = "DELETE FROM `uzytkownicy` WHERE `id_uzytkownika` = '$id'";

    $con->query($query);
    header('./logout.php');
}else{
    header('location: ./index.php');
}



?>