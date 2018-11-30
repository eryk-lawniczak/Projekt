<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); ?>

        <div class="row justify-content-md-center bg-light">
          <div class="col-12 bg-light text-dark h4 week-table text-center">
            Godziny otwarcia placówki
          </div>
          <div class="w-100"></div>
          <div class="col-1.7 text-center bg-light content-center">
            <table class="text-center content-center table-hours">
              <tr>
                <th>Dzień</th>
                <th>Godzina</th>
              </tr>
              <tr>
                <td>Poniedziałek</td>
                <td>9-17</td>
              </tr>
              <tr>
                <td>Wtorek</td>
                <td>7-17</td>
              </tr>
              <tr>
                <td>Środa</td>
                <td>7-17</td>
              </tr>
              <tr>
                <td>Czwartek</td>
                <td>7-16</td>
              </tr>
              <tr>
                <td>Piątek</td>
                <td>7-14</td>
              </tr>
              <tr>
                <td>Sobota</td>
                <td>10-14</td>
              </tr>
              <tr>
                <td>Niedziela</td>
                <td>Nieczynne</td>
              </tr>
            </table>
          </div>
          <div class="w-100"></div>
          <br><br>
          <div class="col-12 bg-light text-dark h4 content-center">
            Adres i korespondencja
          </div>
          <div class="col-4 text-center">
            <span class="bold">Miasto:</span> Poznań<br>
           <span class="bold">Ulica:</span> Swoboda 13 <br>
            <span class="bold">Kod pocztowy:</span> 61-616 <br>
            <span class="bold">Telefon:</span> 123 456 789 <br>
            <span class="bold">E-mail:</span> biblioteka@lawnika.pl <br>

          </div>

        </div>

      <?php include('./foot.php'); ?>
    </div>
  </body>
</html>
<?php
  include('./modals.php');
 ?>
