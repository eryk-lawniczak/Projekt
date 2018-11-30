<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); ?>

<div class="row justify-content-md-center bg-light">
          <div class="col-12 bg-light text-dark h4 week-table">
            Projekt strony internetowej dla biblioteki
          </div>
          <div class="w-100"></div>
          <div class="col-6 text-justify bg-light content-center">
            <p>Projekt strony biblioteki stworzony z myślą o zaliczniu semestru u Pana Profesora Mirosława Szypera oraz usystematyzowaniu informacji, umiejętności i wiedzy zdobytej przez ten okres na lekcjach pracowni witryn i aplikacji internetowych.</p>
            <p>Nazywam się Eryk Ławniczak, jestem z klasy 4e i podjąłem się organizajci bazy danych i strony z nią połączonej. Na stronie załączone są takie elementy jak wyciąganie aktualności z bazy danych, logowanie użytkowników z bazy, rejestracja nowych użytkowniów, moderacja aktualności, moderacja użytkowników, a przede wszystkim sprawny system książek dostępnych w bibliotece. Dodawanie i usuwanie oraz edycja z poziomu administratora, wyświetlanie z poziomu zwykłego użytkownika.</p>
            <p>Serdecznie zapraszam do zapoznania się z treścią strony :)</p>
          </div>
         
       

      <?php include('./foot.php'); ?>
    </div>
  </body>
</html>
<?php
  include('./modals.php');
 ?>
