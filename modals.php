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
             echo "<p class=\"bg-danger text-white\"> $_SESSION[login_error] </p>";
             unset($_SESSION['login-error']);
           }
          ?>
          <input id="login" class="dane" type="text" name="login" placeholder="Wpisz login"><br><br>
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
        <form class="formularz-logowanie" action="rejestracja.php" method="post">
         <?php
          if(!empty($_SESSION['error'])){
            echo "<p class=\"bg-danger text-white\"> $_SESSION[error] </p>";
            unset($_SESSION['error']);
          }
         ?>
          <input  class="dane" type="text" name="login" placeholder="Wpisz login" require><br><br>
          <input  class="dane" type="password" name="haslo1" placeholder="Wpisz haslo" require><br><br>
          <input  class="dane" type="password" name="haslo2" placeholder="Potwierdź haslo" require><br><br>
          <input  class="dane" type="email" name="email" placeholder="Wpisz email np.: jan@kowalski.pl"><br><br>
          <input  class="dane" type="text" name="imie" placeholder="Wpisz imie" require><br><br>
          <input class="dane" type="text" name="nazwisko" placeholder="Wpisz nazwisko" require><br><br>
          <input type="checkbox" name="zgoda" require >  Zgadzam sie na przetwarzanie danych i oświadczam że zapoznałam/em się z <a href="#" download="./regulamin.txt">regulaminem</a> serwisu
      <br><br>
      <button type="submit" name="przycisk" class="btn btn-success">Rejestracja</button>

        </form>    </div>



    </div>
  </div>
</div>
