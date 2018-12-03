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
        <h5 class="modal-title" id="modal-reg-label">Edytuj użytkownika</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <div class="modal-body">
                <form class="formularz-logowanie" action="./adminEditUser.php" method="post">
<?php

$id = $_GET['edit'];



$queryM = "SELECT * FROM `uzytkownicy` WHERE `uzytkownicy`.`id_uzytkownika` = '$id'";
$resultM = $con->query($queryM);

$rowM = $resultM->fetch_assoc();


$_SESSION['id_u'] = $_GET['edit'];

?>
         <?php
          if(!empty($_SESSION['error'])){
            echo "<p class=\"alert alert-danger\"> $_SESSION[error] </p>";
            unset($_SESSION['error']);
          }
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


<!-- edycja newsa -->
<div class="modal fade" id="editNewsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-reg-label">Edytuj wpis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <div class="modal-body">
                <form class="formularz-logowanie" action="./adminEditNews.php" method="post">
<?php

$id = $_GET['idnews'];
$_SESSION['id'] = $_GET['idnews'];
unset($_GET['idnews']);

$queryN = "SELECT * FROM `news` WHERE `news`.`id_news` = '$id';";
$resultN = $con->query($queryN);
if($resultN->num_rows == 1)
$rowN = $resultN->fetch_assoc();
//var_dump($rowN);

?>
                <div class="form-group">

              <form action="addNews.php" method="post">
                <label for="heading">Nagłówek</label>
                    <input class="form-control" type="text" name="heading" value="<?php echo "$rowN[naglowek]" ?>"  required><br>

                <label for="heading">Treść</label>
                    <textarea id ="text"class="form-control" rows="6" name=content  required><?php echo "$rowN[tresc]" ?></textarea><br>
                    <button type="submit" name="przycisk" class="btn btn-success" >Zatwierdź</button>

                </form>


              </div>


        </form>    </div>



    </div>
  </div>
</div>
<!-- edycja książek-->
<div class="modal fade" id="editBooksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-login-label">Edytuj książki</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="./adminEditBooks.php" method="post">
<?php

  $id = $_SESSION['edit'];
  $queryB = "SELECT * FROM `ksiazki` WHERE `id_ksiazki` = $id";
  $resultB = $con->query($queryB);
  $rowB = $resultB->fetch_assoc();
?>
          <label for="">Tytuł</label>
          <input class="form-control" type="text" name="title" value="<?php echo "$rowB[tytul]"?>" autofocus required><br>
          <label for="">Autor</label>
          <input class="form-control" type="text" name="author" value="<?php echo "$rowB[autor]"?>" required><br>
          <label for="">Rok wydania</label>
          <input class="form-control" type="text" name="year" value="<?php echo "$rowB[rok_wydania]"?>" required><br>


  <button type="submit" name="przycisk" class="btn btn-success">Zatwierdź</button>
</form>
    </div>
    </div>
  </div>
</div>
