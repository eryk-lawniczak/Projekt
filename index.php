
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
          <div class="col-10 news  no$i bg-news text-white">
            <div class="row">
              <div class="h4 col-8 news-heading">News #$i</div>
              <div class="col4 text-right">

              </div>

              <div class="col-12 text-justify">
                <p>Etiam blandit velit id eleifend imperdiet. Nulla auctor tincidunt dui ac rutrum. Proin non sem at enim semper lacinia ac ut neque. Nullam viverra velit non ligula semper laoreet. Sed suscipit pharetra porta. Ut mattis nec urna non ultricies. Nam non ultricies magna. Suspendisse commodo tellus nibh, et semper augue tempor quis.</p>
              </div>
              <div class="w-100"></div>
              <div class="col-12 text-right">
              <a href="#"><button class="btn btn-warning btn-sm">Edytuj</button></a>
              <a href="#"><button class="btn btn-danger btn-sm">Usuń</button></a>
              </div>
            </div>
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
