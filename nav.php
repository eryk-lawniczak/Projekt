
<style media="screen">
  <?php
  include('./css/navbar.css');
  include('./css/master.css');
  session_start();
  ?>
</style>
<div class="row pasek-menu">
  <div class="col-3 bg-primary logo ">
    <a class="link text-body header-link h3" href="index.php">Biblioteka Ławnika</a>
  </div>
  <div class="col-1 bg-light"></div>
  <nav class="col-8 navbar navbar-expand-lg navbar-light bg-light text-right">
    <p class="navbar-brand" ></p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item buttonnnn">
          <a class="nav-link " href="catalog.php">Katalog online <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item buttonnnn dropdownButton dropdown text-secondary">
          <a class="dropdown-toggle " role="button" id="dropdownBiblioteka" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Biblioteka
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownBiblioteka">
    <a class="dropdown-item" href="a_project.php">O projekcie</a>
    <a class="dropdown-item" href="info.php">Informacje</a>
  </div>
        </li>
        <li class="nav-item buttonnnn">
          <a class="nav-link" href="index.php">Aktualności</a>
        </li>
        <?php if (isset($_SESSION['zalogowany'])) {?>
        <li class="nav-item buttonnnn">

            <a class="nav-link" href="midPanel.php?gut=" >
              Panel użytkownika
            </a>


        </li>
        <li class="nav-item button-logout">

            <a class="nav-link" href="logout.php?logingout=" >
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
