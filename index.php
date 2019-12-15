<?php
/**
 * Created by Danny Eeraerts
 * Date: 2019-12-12
 * Time: 09:31
 */



//include 'includes/autoloader.inc.php';


require 'game.php';?>


<!doctype html>
<html lang="en">
<head>
    <title>Black Jack</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content= "">
    <meta name ="keywords" content = "Meta Tags, Metadata" />
    <meta name ="author" content = "Danny Eeraerts" />

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cyborg/bootstrap.min.css"  rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">

  <header>
        <div class="row d-flex  align-items-center mt-3 ">
          <div class="col_12 mx-auto">
            <img src="images/blackjack.png" class="float-left" width="200"  alt="Logo"  />
            <h1 class="p-3 float-left">BlackJack</h1>
            <img src="images/blackjack.png" class="float-right" width="200" alt="Logo" />

          </div>
        </div>
  </header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-1">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="new_game.php">New Game <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section1">Game Rules</a>
        </li>
      </ul>
    </div>
  </nav>

  <main>
    <div class="row d-flex align-items-center">
        <div id="section1" class="col-12">
            <?php
            create_game();?>
        </div>
    </div>

    <div class="col-12  align-items-center text-center mx-auto mt-4">
      <form method="post" action="#">
        <button type="submit" name="hit" class="btn btn-warning btn-lg mr-lg-5 px-5 mr-2">Hit</button>
        <button type="submit" name ="stand" class="btn btn-success btn-lg mr-lg-5 mr-2 px-5">Stand</button>
        <button type="submit" name ="surrender" class="btn btn-danger btn-lg px-4">Surrender</button>
      </form>
    </div>

    <div>
        <?php if( ($_SESSION['sum'])>21 ) {?>
        <h4 class="my-3 py-2 bg-danger p-0">You lose all your money</h4>
        <?php
        }
        if(isset($_POST['surrender'])) {?>
            <h4 class="my-3 py-2 bg-danger p-0">You lose 1/2 of your money</h4>
        <?php } ?>
    </div>
  </main>


  <footer class="container fixed-lg-bottom mx-auto row d-flex align-items-center  py-3 mt-2">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left">
              <p>&copy;&nbsp;<?php echo date("Y")." "; ?>EDweb&photo Studio</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">
              <a href="#" class ="mr-4">disclaimer</a>
              <a href="#" class ="mr-4">privacy policy</a>
              <a href="#" class ="mr-2">cookie policy</a>
          </div>
  </footer>
</div>
<!-- Optional JavaScript -->
<!--<script src="cookiealert-standalone.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</body>
</html>

