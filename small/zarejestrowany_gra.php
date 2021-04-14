<?php
    session_start();
    if($_SESSION['zarejestrowanygra']!=true){
        header("Location: ../index.html");
        exit();
    }else{
      //Sending and email
    }
    if(isset($_POST['sbmt'])){
      header("Location: ../zaloguj_user.php");
    }
?>



<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="theme-color" content="#1f1f1f" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.png" />

    <link rel="stylesheet" href="../css/registration.css" />
    <link rel="stylesheet" href="../css/fonts4.css" />

    <title>Rejestracja</title>
  </head>
  <body>
    <div id="kontener_rej">
      <header>
        <img src="../assets/logo-main.svg" alt="" id="logo" />
      </header>
      <div style="clear:both;"></div>
      <span id="logowanie">Panel rejestracji drużyny</span>

        <main>
            <span id="reg_title">To tyle! Proste, prawda? </span>
            <p id='light_p'>Dalszą część rejestracji drużyny wykonasz przez osobny panel.</p>
            <p id='light_p'>Twoja konto zostało utworzone, aby uzyskać do niego dostęp - sprawdź maila.</p>
        </main>
        <form action="" method='POST'>
            <div class="blank">
                <button type='submit' id='log' name='sbmt'>Przejdź do panelu</button>
            </div>
        </form>
  </body>
</html>


