<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); ?>

        <?php

        require_once('./db_vars.php');
        $con = @new mysqli($db_host, $user, $pass, $database);
        if ($con->connect_errno) {
        //   die('Błędne połączenie');
        echo "Blad";
        }else{
          $con->set_charset('utf8');
        }

        //news dla admina
        if(isset($_SESSION['admin']) || isset($_SESSION['moderator'])){
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
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-edit">Edytuj</button>
                <a href="./delete-news.php"><button class="btn btn-danger btn-sm" >Usuń</button></a>
                </div>
              </div>
            </div>
            </div>
NEWS;
          }
        }else{
          //news dla usera
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

              </div>
            </div>
            </div>
NEWS;
        }
      }?>

  <?php include('./foot.php'); ?>
    </div>
  <?php

if(!empty($_SESSION['error'])){?>
    <script>
      $(document).ready(function(){
        $('#modal-reg').modal('show');
      })
    </script>
<?php
}

if (isset($_SESSION['po_rejestracji'])) {?>
            <script>
              $(document).ready(function(){
                $('#modal-login').modal('show');
              })
            </script>
  <?php
}
      
if(!empty($_SESSION['login_error'])){?>
      <script>
        $(document).ready(function(){
          $('#modal-login').modal('show');
        })
      </script>
  <?php
}?>
  </body>
</html>
<?php
  include('./modals.php');
 ?>
