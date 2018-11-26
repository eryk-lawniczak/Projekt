
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="./css/glowny.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/stopka.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>
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
