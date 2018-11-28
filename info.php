
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); ?>

        <div class="row">
          <div class="col-12 bg-secondary text-white h4">
            Godziny otwarcia placówki
          </div>
          <div class="w-100"></div>
          <div class="col-6">
            <table class="text-center">
              <tr>
                <th>Dzień</th>
                <th>Godzina</th>
              </tr>
              <tr>
                <td>Poniedziałel</td>
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

        </div>

      <?php include('./stopka.php'); ?>
    </div>
  </body>
</html>
<?php
  include('./modals.php');
 ?>
