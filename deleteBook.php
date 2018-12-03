<?php 
session_start();
if(isset($_GET['id']) || isset($_POST['id'])){
    $id = $_GET['id'];
    if(isset($_POST['id'])) $id = $_POST['id'];

    require_once('./connect.php');
    $query = "DELETE FROM `ksiazki` WHERE `id_ksiazki` = '$id'";

    $con->query($query);
   
    header('location: ./catalog.php');
 
}else{
    header('location: ./index.php?chujwieco=');
}



?>