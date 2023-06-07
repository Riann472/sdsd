<?php
  session_start();
  // print_r($_SESSION);
  if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: log.html');
  }
  $logado = $_SESSION['login'];
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        body{
          background-color: #3f51b5;
        }
      </style>
    </head>

    <body>
      <?php include('navbar.php')?>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <?php
        echo "<br><br><br><h1 style='font-size: 30px; text-align: center; margin-top: 150px;'><u>Bem vindo " . $logado . "</u></h1><br><br><br><br><br><br><br><br>"
      ?>
      <?php include('footer.php')?>
    

    </body>
  </html>
        