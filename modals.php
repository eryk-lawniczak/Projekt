<!-- logowanie -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-login-label">Logowanie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="formularz-logowanie" action="logowanie.php" method="post">
          <?php
           if(!empty($_SESSION['login_error'])){
             echo "<p class=\"alert alert-danger\"> $_SESSION[login_error] </p>";
             unset($_SESSION['login_error']);
           }
           if(isset($_SESSION['po_rejestracji']))
           unset($_SESSION['po_rejestracji']);
          ?>
          <input id="login" class="dane" type="text" name="login" placeholder="Wpisz login" autofocus><br><br>
          <input id="haslo" class="dane" type="password" name="haslo" placeholder="Wpisz hasło"><br><br>

      
  <button type="submit" name="przycisk" class="btn btn-success">Zaloguj</button>
</form>
    </div>
    </div>
  </div>
</div>
<!-- Rejestracja -->
<div class="modal fade" id="modal-reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-reg-label">Rejestracja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="formularz-logowanie" action="./rejestracja.php" method="post">
         <?php
          if(!empty($_SESSION['error'])){
            echo "<p class=\"alert alert-danger\"> $_SESSION[error] </p>";
            unset($_SESSION['error']);
          }
         ?>
          <input  class="dane" type="text" name="login" placeholder="Wpisz login" required autofocus><br><br>
          <input  class="dane" type="password" name="haslo1" placeholder="Wpisz haslo" required><br><br>
          <input  class="dane" type="password" name="haslo2" placeholder="Potwierdź haslo" required><br><br>
          <input  class="dane" type="email" name="email" placeholder="Wpisz email np.: jan@kowalski.pl"><br><br>
          <input  class="dane" type="text" name="imie" placeholder="Wpisz imie" required><br><br>
          <input class="dane" type="text" name="nazwisko" placeholder="Wpisz nazwisko" required><br><br>
          <input type="checkbox" name="zgoda" require >  Zgadzam sie na przetwarzanie danych i oświadczam że zapoznałam/em się z <a href="#" download="./regulamin.txt">regulaminem</a> serwisu
      <br><br>
      <button type="submit" name="przycisk" class="btn btn-success">Rejestracja</button>

        </form>    </div>



    </div>
  </div>
</div>
<!-- edycja użytkownika -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-reg-label">Rejestracja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <div class="modal-body">
                <form class="formularz-logowanie" action="./adminEditUser.php" method="post">
<?php
 require_once('./connect.php');
$id = $_GET['edit'];

unset($_GET['edit']);

$queryM = "SELECT * FROM `uzytkownicy` WHERE `uzytkownicy`.`id_uzytkownika` = '$id'";
$resultM = $con->query($queryM);

$rowM = $resultM->fetch_assoc();

?>
                <div class="form-group">

              <label for="editImie">Imie</label>
              <input type="text" class="form-control" name="imie" aria-describedby="emailHelp" value="<?php echo $rowM['imie'] ?>" required>
              </div>
              <div class="form-group">
              <label for="editNazwisko">Nazwisko</label>
              <input type="text" class="form-control" name="nazwisko"  value="<?php echo $rowM['nazwisko'] ?>" required>
              </div>
              <div class="form-group ">
              <label for="editMail">E-mail</label>
              <input type="email" class="form-control" name="email" value="<?php echo $rowM['email'] ?>" required><br>
              <label for="editMail">Rola</label><br>
              Admin <input type="radio"  name="role" value="1" <?php if($rowM['id_roli'] == 1) echo "checked";?> >
              User <input type="radio" name="role" value="3" <?php if($rowM['id_roli'] == 3) echo "checked";?>>
             

              </div>
      <br><br>
      <button type="submit" name="przycisk" class="btn btn-success">Zatwierdź</button>

        </form>    </div>



    </div>
  </div>
</div>
