<?php 
session_start();
if(isset($_GET['id']) || isset($_POST['id'])){
    $id = $_GET['id'];
    if(isset($_POST['id'])) $id = $_POST['id'];

    require_once('./connect.php');
    $query = "DELETE FROM `news` WHERE `id_news` = '$id'";

    $result = $con->query($query);
    
    header('location: ./index.php');
 
}else{
    header('location: ./index.php?chujwieco=');
}



?>