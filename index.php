<?php
session_start();
  if(isset($_POST['zalogowany'])){
    $_SESSION['login'] = true;
  }
  if (isset($_SESSION['login'])) {

  }
 ?>

<!doctype html>
<html lang="pl">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styl.css">
    <link rel="stylesheet" href="./css/modals.css">
    <title>Biblioteka Ławnika</title>

  </head>
  <body>



      <div class="main container-fluid">
        <div id="anchor" class="upper-strip">
          <?php
            if (!isset($_SESSION['login'])) {
            ?>
            <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#logowanie">Logowanie</button>
            <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#rejesstr">Rejestracja</button>

            <?php
            }
            echo "Witamy!";
           ?>

          <button type="button" class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#główna">Strona główna</button>
        </div>


        <a href="index.html"><h1 class="banner baner-text">Biblioteka Ławnika</h1></a>

        <nav class="w-auto">
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link nav-opt " href="#">Strona główna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-opt" href="#">strona1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-opt" href="#">strona2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-opt" href="#">strona3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-opt" href="#">strona4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-opt" href="#">strona5</a>
            </li>
          </ul>
        </nav>

        <section >
          <div class=" col-10 offset-1 ">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio eget ipsum rutrum, id maximus nulla malesuada. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur elementum purus et sem commodo, elementum imperdiet lectus vulputate. Curabitur non pretium lorem. Sed vitae mi id justo ultricies commodo at sed ligula. Quisque molestie, libero aliquam pharetra elementum, ex leo faucibus ante, id varius felis lectus vel nunc. Nam at ullamcorper lorem. Quisque porta massa pellentesque quam feugiat efficitur. Aenean vitae sollicitudin ex. Fusce vel tortor viverra, vestibulum libero vitae, mattis enim. Proin a urna eget ex rutrum bibendum facilisis non odio. Quisque at purus sit amet lectus pellentesque ornare sit amet non nisl. Praesent iaculis dignissim magna, sit amet cursus arcu scelerisque sit amet. Vestibulum porttitor, mauris sit amet facilisis lacinia, nunc erat pharetra ex, sit amet sodales libero nulla a augue.

            Duis at elementum turpis. Nam ac lacus vehicula, egestas quam tempor, tristique odio. Integer scelerisque, arcu ac euismod suscipit, ligula neque molestie tellus, eu dictum sem turpis a ante. Praesent eget tincidunt tortor. Pellentesque felis nunc, molestie non orci convallis, tristique maximus nisi. Nam sagittis nisi in porta laoreet. Curabitur sed laoreet eros. Nam augue augue, dignissim ac sollicitudin sed, tincidunt at nisl. Phasellus at fermentum leo. Nullam posuere efficitur nisl quis egestas. Proin malesuada nibh efficitur, hendrerit nulla at, commodo nisl. Donec sodales in libero nec cursus. Donec eget porta orci, non semper tellus. Nam non ullamcorper lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum enim vel tempor consectetur.

            Suspendisse rhoncus, erat non condimentum euismod, sapien mi pulvinar libero, nec varius augue metus quis ex. Fusce faucibus tempor efficitur. Etiam hendrerit ut ipsum vitae mattis. Suspendisse tempor id nulla sit amet facilisis. Nullam maximus velit aliquet elit condimentum, in gravida dui dignissim. Suspendisse potenti. Nunc quis metus elit. Maecenas sit amet pretium est, at pulvinar enim. Suspendisse eu metus rutrum, molestie diam vitae, hendrerit justo. Praesent venenatis lorem vel leo dapibus, ut pellentesque erat facilisis. Cras efficitur quam diam, et viverra dolor eleifend malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

            Vestibulum scelerisque orci id ex consectetur, vel blandit nunc bibendum. Cras risus dui, efficitur a arcu non, lobortis consectetur erat. Nam sed lectus non massa aliquet sollicitudin id sed ex. Ut dolor justo, pulvinar nec neque eget, tempor dictum turpis. Mauris id consequat arcu. Maecenas dignissim et risus quis pellentesque. Morbi imperdiet risus eget laoreet mollis. Sed sed aliquam mi. Phasellus orci ex, rhoncus ut mi ut, tincidunt gravida tellus. Quisque ultrices felis sit amet sapien posuere accumsan.</p>
          </div>
        </section>
        <section >
          <div class=" col-10 offset-1 ">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio eget ipsum rutrum, id maximus nulla malesuada. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur elementum purus et sem commodo, elementum imperdiet lectus vulputate. Curabitur non pretium lorem. Sed vitae mi id justo ultricies commodo at sed ligula. Quisque molestie, libero aliquam pharetra elementum, ex leo faucibus ante, id varius felis lectus vel nunc. Nam at ullamcorper lorem. Quisque porta massa pellentesque quam feugiat efficitur. Aenean vitae sollicitudin ex. Fusce vel tortor viverra, vestibulum libero vitae, mattis enim. Proin a urna eget ex rutrum bibendum facilisis non odio. Quisque at purus sit amet lectus pellentesque ornare sit amet non nisl. Praesent iaculis dignissim magna, sit amet cursus arcu scelerisque sit amet. Vestibulum porttitor, mauris sit amet facilisis lacinia, nunc erat pharetra ex, sit amet sodales libero nulla a augue.

            Duis at elementum turpis. Nam ac lacus vehicula, egestas quam tempor, tristique odio. Integer scelerisque, arcu ac euismod suscipit, ligula neque molestie tellus, eu dictum sem turpis a ante. Praesent eget tincidunt tortor. Pellentesque felis nunc, molestie non orci convallis, tristique maximus nisi. Nam sagittis nisi in porta laoreet. Curabitur sed laoreet eros. Nam augue augue, dignissim ac sollicitudin sed, tincidunt at nisl. Phasellus at fermentum leo. Nullam posuere efficitur nisl quis egestas. Proin malesuada nibh efficitur, hendrerit nulla at, commodo nisl. Donec sodales in libero nec cursus. Donec eget porta orci, non semper tellus. Nam non ullamcorper lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum enim vel tempor consectetur.

            Suspendisse rhoncus, erat non condimentum euismod, sapien mi pulvinar libero, nec varius augue metus quis ex. Fusce faucibus tempor efficitur. Etiam hendrerit ut ipsum vitae mattis. Suspendisse tempor id nulla sit amet facilisis. Nullam maximus velit aliquet elit condimentum, in gravida dui dignissim. Suspendisse potenti. Nunc quis metus elit. Maecenas sit amet pretium est, at pulvinar enim. Suspendisse eu metus rutrum, molestie diam vitae, hendrerit justo. Praesent venenatis lorem vel leo dapibus, ut pellentesque erat facilisis. Cras efficitur quam diam, et viverra dolor eleifend malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

            Vestibulum scelerisque orci id ex consectetur, vel blandit nunc bibendum. Cras risus dui, efficitur a arcu non, lobortis consectetur erat. Nam sed lectus non massa aliquet sollicitudin id sed ex. Ut dolor justo, pulvinar nec neque eget, tempor dictum turpis. Mauris id consequat arcu. Maecenas dignissim et risus quis pellentesque. Morbi imperdiet risus eget laoreet mollis. Sed sed aliquam mi. Phasellus orci ex, rhoncus ut mi ut, tincidunt gravida tellus. Quisque ultrices felis sit amet sapien posuere accumsan.</p>
          </div>
        </section>
        <section >
          <div class=" col-10 offset-1 ">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio eget ipsum rutrum, id maximus nulla malesuada. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur elementum purus et sem commodo, elementum imperdiet lectus vulputate. Curabitur non pretium lorem. Sed vitae mi id justo ultricies commodo at sed ligula. Quisque molestie, libero aliquam pharetra elementum, ex leo faucibus ante, id varius felis lectus vel nunc. Nam at ullamcorper lorem. Quisque porta massa pellentesque quam feugiat efficitur. Aenean vitae sollicitudin ex. Fusce vel tortor viverra, vestibulum libero vitae, mattis enim. Proin a urna eget ex rutrum bibendum facilisis non odio. Quisque at purus sit amet lectus pellentesque ornare sit amet non nisl. Praesent iaculis dignissim magna, sit amet cursus arcu scelerisque sit amet. Vestibulum porttitor, mauris sit amet facilisis lacinia, nunc erat pharetra ex, sit amet sodales libero nulla a augue.

            Duis at elementum turpis. Nam ac lacus vehicula, egestas quam tempor, tristique odio. Integer scelerisque, arcu ac euismod suscipit, ligula neque molestie tellus, eu dictum sem turpis a ante. Praesent eget tincidunt tortor. Pellentesque felis nunc, molestie non orci convallis, tristique maximus nisi. Nam sagittis nisi in porta laoreet. Curabitur sed laoreet eros. Nam augue augue, dignissim ac sollicitudin sed, tincidunt at nisl. Phasellus at fermentum leo. Nullam posuere efficitur nisl quis egestas. Proin malesuada nibh efficitur, hendrerit nulla at, commodo nisl. Donec sodales in libero nec cursus. Donec eget porta orci, non semper tellus. Nam non ullamcorper lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum enim vel tempor consectetur.

            Suspendisse rhoncus, erat non condimentum euismod, sapien mi pulvinar libero, nec varius augue metus quis ex. Fusce faucibus tempor efficitur. Etiam hendrerit ut ipsum vitae mattis. Suspendisse tempor id nulla sit amet facilisis. Nullam maximus velit aliquet elit condimentum, in gravida dui dignissim. Suspendisse potenti. Nunc quis metus elit. Maecenas sit amet pretium est, at pulvinar enim. Suspendisse eu metus rutrum, molestie diam vitae, hendrerit justo. Praesent venenatis lorem vel leo dapibus, ut pellentesque erat facilisis. Cras efficitur quam diam, et viverra dolor eleifend malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

            Vestibulum scelerisque orci id ex consectetur, vel blandit nunc bibendum. Cras risus dui, efficitur a arcu non, lobortis consectetur erat. Nam sed lectus non massa aliquet sollicitudin id sed ex. Ut dolor justo, pulvinar nec neque eget, tempor dictum turpis. Mauris id consequat arcu. Maecenas dignissim et risus quis pellentesque. Morbi imperdiet risus eget laoreet mollis. Sed sed aliquam mi. Phasellus orci ex, rhoncus ut mi ut, tincidunt gravida tellus. Quisque ultrices felis sit amet sapien posuere accumsan.</p>
          </div>
        </section>

        <footer >

            <p class="col-10 offset-1"> Strona wykonana przez: Eryk Ławniczak &copy;<br><a class="btn btn-outline-light btn-sm" href="#anchor" role="button">Góra</a></p>
        </footer>
      </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php include ('./modals.php') ; ?>
