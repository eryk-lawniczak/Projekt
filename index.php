<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); ?>
      <div class="row body justify-content-md-center">
      <div class="h2 no1 col-10 ">Aktualności</div>
      </div>
        <?php

        require_once('./connect.php');
        $query = "SELECT * FROM `news` ORDER BY `id_news` DESC";
        $result = $con->query($query);


        //news dla admina
        if(isset($_SESSION['admin']) || isset($_SESSION['moderator'])){
          for ($i=2; $i <22 && ($row = $result->fetch_assoc()) == true ; $i++) {
            echo<<<NEWS

            <div class="row body justify-content-md-center">
            
            <div class="w-100"></div>
            <div class="col-10 news  no$i bg-news text-white">
              <div class="row">
                <div class="h4 col-8 news-heading">$row[naglowek]</div>
                <div class="col4 text-right">

                </div>

                <div class="col-12 text-justify">
                  <p>$row[tresc]</p>
                </div>
                <div class="w-100"></div>
                <div class="col-12 text-right">
                <a href="./index.php?idnews=$row[id_news]"><button type="button" class="btn btn-sm btn-secondary text-white" data-toggle="modal" data-target="">Edytuj</button></a></td>
                <a href="./deleteNews.php?id=$row[id_news]"><button type="button" class="btn btn-sm btn-danger text-white">Usuń</button></a>
                </div>
              </div>
            </div>
            </div>
NEWS;
          }
        }else{
          //news dla usera
          for ($i=2; $i < 22 && ($row = $result->fetch_assoc()) == true; $i++) {
            echo<<<NEWS

            <div class="row body justify-content-md-center">
            <div class="col-10 news  no$i bg-news text-white">
              <div class="row">
              <div class="h4 col-8 news-heading">$row[naglowek]</div>
              <div class="col4 text-right">

              </div>

              <div class="col-12 text-justify">
                <p>$row[tresc]</p>
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

<?php

if(!empty($_GET['idnews'])){?>
    <script>
      $(document).ready(function(){
        $('#editNewsModal').modal('show');
      })
    </script>
<?php }?>
  </body>
</html>
<?php
  include('./modals.php');
 ?>
