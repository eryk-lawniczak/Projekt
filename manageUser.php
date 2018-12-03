<?php
session_start();
if(isset($_SESSION['admin']) && isset($_SESSION['zalogowany']) && (isset($_GET['gut']) ||isset($_SESSION['gut']))){
$_SESSION['gut'] =true;
?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); 
            require_once('./connect.php');
      ?>

        <div class="row  justify-content-md-center" >
            <div class="col-7 bg-light" style="margin-top:120px;">

            <div class="h4">Edycja użytkownikow</div>
                <?php if(isset($_SESSION['udalosie'])){
                     echo "<p class=\"alert alert-success\"> $_SESSION[udalosie] </p>";
                     unset($_SESSION['udalosie']);
                    }
            $query = "SELECT * FROM `uzytkownicy` JOIN `role` ON `uzytkownicy`.`id_roli` = `role`.`id_roli`  WHERE 1";
            if($result = $con->query($query)){
                $_SESSION['panelAdmin'] = true;
                echo"<table class=\"table\">";
                echo "<thead class=\"bg-primary white-text\">
                <tr>
                  <th scope=\"col\">id</th>
                  <th scope=\"col\">Login</th>
                  <th scope=\"col\">Haslo</th>
                  <th scope=\"col\">Email</th>
                  <th scope=\"col\">Imie</th>
                  <th scope=\"col\">Nazwisko</th>
                  <th scope=\"col\">rola</th>
                  <th scope=\"col\"></th>
                  <th scope=\"col\"></th>
                </tr>
              </thead>
              <tbody>";
              $i=0;
                while($row = $result->fetch_assoc()){
                   
                    echo<<<lista
                    <tr>
                    <th scope=\"row\">$row[id_uzytkownika]</th>
                    <td>$row[login]</td>
                    <td>**********</td>
                    <td>$row[email]</td>
                    <td>$row[imie]</td>
                    <td>$row[nazwisko]</td>
                    <td>$row[rola]</td>
                    <td><a href="./manageUser.php?edit=$row[id_uzytkownika]"><button type="button" class="btn btn-sm btn-secondary text-white" data-toggle="modal" data-target="">Edytuj</button></a></td>
                    <td><a href="./delete.php?id=$row[id_uzytkownika]"><button type="button" class="btn btn-sm btn-danger text-white">Usuń</button></a></td>
                  </tr>
                    
lista;
                }
                echo " </tbody>
                </table>";
            }else{
                exit;
            }
            
            ?>
            </div>
        </div>
  <?php include('./foot.php'); ?>
    </div>

<?php

if(!empty($_GET['edit'])){?>
    <script>
      $(document).ready(function(){
        $('#editUserModal').modal('show');
      })
    </script>
<?php }?>


  </body>
</html>
<?php
include('./modals.php');
}else{
    header('location: ./index.php');
}

 ?>