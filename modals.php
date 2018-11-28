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
        <form class="formularz-logowanie" action="index.php" method="post">
          <input id="login" class="dane" type="text" name="login" placeholder="Wpisz login"><br><br>
          <input id="haslo" class="dane" type="password" name="haslo" placeholder="Wpisz hasło"><br><br>

      </div>
<button type="submit" class="btn btn-success">Zaloguj</button>
</form>
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
         
          <input id="login" class="dane" type="text" name="login" placeholder="Wpisz login" require><br><br>
          <input id="haslo" class="dane" type="password" name="haslo" placeholder="Wpisz haslo" require><br><br>
          <input id="email" class="dane" type="email" name="email" placeholder="Wpisz email np.: jan@kowalski.pl"><br><br>
          <input id="imie" class="dane" type="text" name="imie" placeholder="Wpisz imie" require><br><br>
          <input id="imie" class="dane" type="text" name="imie" placeholder="Wpisz Nazwisko" require><br><br>
          <input id="zgoda"  type="checkbox" name="zgoda" >  Zgadzam sie na przetwarzanie danych i oświadczam że zapoznałam/em się z <a href="#" download="./regulamin.txt">regulaminem</a> serwisu
      <br><br>
        </form>    </div>


        <button type="submit" class="btn btn-success">Rejestracja</button>

    </div>
  </div>
</div>
