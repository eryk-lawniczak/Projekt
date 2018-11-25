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
        </form>
      </div>


        <button type="button" class="btn btn-success">Zaloguj</button>

    </div>
  </div>
</div>
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
        <form class="formularz-logowanie" action="index.php" method="post">
          <p>Pola login, hasło i zgoda na przetwarzanie są obowiązkowe.</p>
          <input id="login" class="dane" type="text" name="login" placeholder="Wpisz login max 20 znaków"><br><br>
          <input id="haslo" class="dane" type="password" name="haslo" placeholder="Wpisz hasło od 4 do 16 znaków"><br><br>
          <input id="email" class="dane" type="email" name="email" placeholder="Wpisz email np.: jan@kowalski.pl"><br><br>
          <input id="imie" class="dane" type="text" name="imie" placeholder="Wpisz imie"><br><br>
          <input id="imie" class="dane" type="text" name="imie" placeholder="Wpisz Nazwisko"><br><br>
          <input id="zgoda"  type="checkbox" name="zgoda" >  Zgadzam sie na przetwarzanie danych i oświadczam że zapoznałam/em się z regulaminem serwisu
      <br><br>
        </form>    </div>


        <button type="button" class="btn btn-success">Rejestracja</button>

    </div>
  </div>
</div>
