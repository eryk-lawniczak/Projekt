
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); ?>

        <?php

        for ($i=1; $i < 11 ; $i++) {
          echo<<<NEWS

          <div class="row body justify-content-md-center">
          <div class="col-10 news no$i bg-dark text-white">
          News #$i
          </div>
          </div>
NEWS;
        }
         ?>

      <?php include('./stopka.php'); ?>
    </div>
  </body>
</html>
<?php
  include('./modals.php');
 ?>
