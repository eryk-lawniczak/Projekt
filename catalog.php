<?php 
session_start();
require_once('./connect.php');

?>
<!DOCTYPE html>
<html lang="pl">
<?php include('./head.php'); ?>
  <body>
    <div class="container-fluid">
      <?php include('./nav.php'); ?>

      <div class="row ksiazki justify-content-md-center">
      
      <div class="col-6 text-left h4">
        Spis książek:
      </div>

   
      <div class="w-100"></div>
<?php 

if(!isset($_SESSION['admin']) || !isset($_SESSION['zalogowany'])){
          $query2 = "SELECT * FROM `ksiazki` where 1";
          $result2 = $con->query($query2);
          echo"<table class=\"col-8 table table-books\">";
          echo "<thead class=\"bg-primary white-text\">
          <tr>
            <th scope=\"col\">id</th>
            <th scope=\"col\">Tytul</th>
            <th scope=\"col\">Autor</th>
            <th scope=\"col\">Rok wydania</th>
            
            
          </tr>
        </thead>
        <tbody>";
        while($row = $result2->fetch_assoc()){
          echo<<<ksiazki
          
          <tr>
            <th scope="row">$row[id_ksiazki]</th>
            <td>$row[tytul]</td>
            <td>$row[autor]</td>
            <td>$row[rok_wydania]</td>
          </tr>
        
ksiazki;
        }
        echo "</tbody>
        </table>";
      }else{
        $query2 = "SELECT * FROM `ksiazki` where 1";
        $result2 = $con->query($query2);
        echo"<table class=\"col-8 table table-books\">";
        echo "<thead class=\"bg-primary white-text\">
        <tr>
          <th scope=\"col\">id</th>
          <th scope=\"col\">Tytul</th>
          <th scope=\"col\">Autor</th>
          <th scope=\"col\">Rok wydania</th>
          <th scope=\"col\"></th>
        </tr>
      </thead>
      <tbody>";
      while($row = $result2->fetch_assoc()){
        echo<<<ksiazki
        
        <tr>
          <th scope="row">$row[id_ksiazki]</th>
          <td>$row[tytul]</td>
          <td>$row[autor]</td>
          <td>$row[rok_wydania]</td>
          <td><a href="./catalog.php?edit=$row[id_ksiazki]"><button type="button" class="btn btn-sm btn-secondary text-white" data-toggle="modal" data-target="">Edytuj</button></a>
              <a href="./deleteBook.php?id=$row[id_ksiazki]"><button type="button" class="btn btn-sm btn-danger text-white">Usuń</button></a>
          </td>
        </tr>
      
ksiazki;
      }
      echo "</tbody>
      </table>";
      }
     
      if(!empty($_GET['edit'])){
        $_SESSION['edit'] = $_GET['edit'];
        ?>
      
        <script>
          $(document).ready(function(){
            $('#editBooksModal').modal('show');
          })
        </script>
    <?php }
?>



  </div>

      <?php include('./foot.php'); ?>
    </div>
  </body>
</html>
<?php

  include('./modals.php');
  


?>
 
