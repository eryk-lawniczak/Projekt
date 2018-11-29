<?php
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['zalogowany'])){

?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); 
            require_once('./connect.php');

            $query = "SELECT * FROM `uzytkownicy` WHERE `login` = '$_SESSION[user]'";
            $result = $con->query($query);
            $row = $result->fetch_assoc();
            
      ?>

        <div class="row  justify-content-md-center" >
            <div class="col-6 bg-light" style="margin-top:120px;">
<!-- zmiana danych -->
<div class="h4">Witaj <?php echo $row['login'];?></div>
<fieldset>
<legend>Edytuj swoje dane:</legend>
<form action="editUser.php" method="post">
  <div class="form-group">

    <label for="editImie">Imie</label>
    <input type="text" class="form-control" name="imie" aria-describedby="emailHelp" value="<?php echo $row['imie'] ?>" required>
  </div>
  <div class="form-group">
    <label for="editNazwisko">Nazwisko</label>
    <input type="text" class="form-control" name="nazwisko"  value="<?php echo $row['nazwisko'] ?>" required>
  </div>
  <div class="form-group ">
  <label for="editMail">E-mail</label>
    <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>" required>
    
  </div>
  <button type="submit" class="btn btn-success" name="przycisk">Edytuj</button>
</form>
</fieldset><br><br>

<!-- zmiana hasla-->
<fieldset>
<legend>Zmień haslo:</legend>
<?php if(isset($_SESSION['error'])){
     echo "<p class=\"bg-danger text-white\"> $_SESSION[error] </p>";
     unset($_SESSION['error']);
}
?>
<form action="editUser.php?pass=" method="post">
  <div class="form-group">

    <label for="editImie">Hasło</label>
    <input type="password" class="form-control" name="oldPass" required>
  </div>
  <div class="form-group">
    <label for="editNazwisko">Nowe hasło</label>
    <input type="password" class="form-control" name="newPass"  required>
  </div>
  <div class="form-group ">
  <label for="editMail">Potwierdź hasło</label>
    <input type="password" class="form-control" name="confPass" required>
    <input type="hidden" value="<?php $row['imie'] ?>" name="login">
    
  </div>
  <button type="submit"  class="btn btn-success" name="pass">Zmień hasło</button>
</form>
</fieldset>
<br><br>

<a href="./delete.php?id=<?php echo $row['id_uzytkownika']?>"><button type="button" class="btn btn-danger">Usuń konto</button></a><br><br><br><br><br>
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
