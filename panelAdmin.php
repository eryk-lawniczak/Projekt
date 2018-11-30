<?php
session_start();
if(isset($_SESSION['admin']) && isset($_SESSION['zalogowany'])){

?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); 
            require_once('./connect.php');
            $query = "SELECT * FROM `uzytkownicy` WHERE `login` = '$_SESSION[admin]'";
            $result = $con->query($query);
            $row = $result->fetch_assoc();
      ?>

        <div class="row  justify-content-md-center" >
            <div class="col-6 bg-light" style="margin-top:120px;">

            <div class="h4">Witaj <?php echo $row['login'];?></div>
            
                <div class="list-group">
                <div class="h5">Zarządzanie</div>
                    <a href="#" class="mgList bg-primary text-white list-group-item list-group-item-action">Użytkownicy</a>
                    <a href="#" class="mgList bg-primary text-white list-group-item list-group-item-action">Aktualności</a>
                    <a href="#" class="mgList bg-primary text-white list-group-item list-group-item-action">Książki</a>
                    <a href="#" class="mgList bg-primary text-white list-group-item list-group-item-action">Twoje konto</a>
                    
                </div>

            </div>
  <?php include('./foot.php'); ?>
        </div>

  </body>
</html>
<?php
include('./modals.php');
}else{
    header('location: ./index.php');
}
  
 ?>

