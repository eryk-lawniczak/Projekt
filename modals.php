
<div class="modal" id="logowanie" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Logowanie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="index.php" method="post">
      <div class="modal-body ">
        <label>Login</label><input type="text" class="form-control" name="login" placeholder="Login"><br>
        <label>Hasło</label>
        <input type="password" class="form-control" name="haslo" placeholder="Hasło">
        <input type="hidden" name="zalogowany">
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-secondary">Anuluj</button>
        <button  class="btn btn-success" >Wyślij</button>
      </div>
        </form>
    </div>
  </div>
</div>
