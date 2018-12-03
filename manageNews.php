<?php
session_start();
if(isset($_SESSION['admin']) && isset($_SESSION['zalogowany']) && (isset($_GET['gut']) ||isset($_SESSION['gut']))){
$_SESSION['gut'] =true;
?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); 
            require_once('./connect.php');
      ?>

        <div class="row  justify-content-md-center" >
            <div class="col-6 bg-light" style="margin-top:120px;">

            <div class="h4">Dodaj news</div>
                <?php if(isset($_SESSION['udalosie'])){
                     echo "<p class=\"alert alert-success\"> $_SESSION[udalosie] </p>";
                     unset($_SESSION['udalosie']);
                    }?>
                <form action="addNews.php" method="post">
                <label for="heading">Nagłówek</label>
                    <input class="form-control" type="text" name="heading" ><br>

                <label for="heading">Treść</label>
                    <textarea class="form-control" rows="6" name=content></textarea><br>
                    <button type="submit" name="przycisk" class="btn btn-success" >Dodaj</button>
                </form>

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