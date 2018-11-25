<style media="screen">
  <?php
  include('./css/navbar.css');
  include('./css/glowny.css');
  session_start();
  session_destroy();
  ?>


</style>
<div class="row">
  <div class="col-3 bg-primary logo ">
    <a class="link text-body header-link" href="#"><h3>Biblioteka Ławnika</h3></a>
  </div>
  <nav class="col-9 navbar navbar-expand-lg navbar-light bg-light text-right">
    <p class="navbar-brand" ></p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item buttonnnn">
          <a class="nav-link " href="nav.php">Katalog online <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item buttonnnn">
          <a class="nav-link" href="#">O bibliotece</a>
        </li>
        <li class="nav-item buttonnnn">
          <a class="nav-link" href="#">Aktualności</a>
        </li>
        <?php if (isset($_SESSION['zalogowany'])) {?>
        <li class="nav-item buttonnnn">

            <a class="nav-link" href="#" >
              Panel użytkownika
            </a>


        </li>
        <li class="nav-item button-logout">

            <a class="nav-link" href="#" >
              Wyloguj
            </a>


        </li>
      <?php  }
      if (!isset($_SESSION['zalogowany'])) {
        ?>
        <li class="nav-item ">
        <button type="button" class="buttonnnn log-reg-button text-secondary" data-toggle="modal" data-target="#modal-login">
          Zaloguj
        </button>
        </li>
        <li class="nav-item ">
        <button type="button" class="buttonnnn log-reg-button text-secondary" data-toggle="modal" data-target="#modal-reg">
          Zarejestruj
        </button>
        </li>
        <?php
      }
       ?>
      </ul>

    </div>
  </nav>
</div>
