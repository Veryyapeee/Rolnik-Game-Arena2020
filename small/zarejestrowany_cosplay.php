<?php
    session_start();
    if($_SESSION['zarejestrowanycosplay']!=true){
        header("Location: ../index.html");
        exit();
    }else{
      //Sending and email
    }
    if(isset($_POST['sbmt'])){
      header("Location: ../index.html");
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

    <title>Rejestracja Cosplay</title>
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
            <p id='light_p'>Dalsza część jest już nasza, powiadomimy Cię, gdy poczynimy kroki w kierunku weryfikacji Twojego zgłoszenia. Obiecujemy zrobić to naszybciej jak się da!</p>
            <p id='light_p'>Jeżeli chcesz się z nami skontaktować, napisz maila na: <br>
            <span style='color:#F13F43;'> cosplay@rolnikgamearena.pl</span>
             </p>

             <p id='light_p'>
                 Na twój adres e-mail wysłaliśmy Ci wszystkie potrzebne dokumenty, sprawdź proszę w razie czego folder SPAM.
            </p>
            <p id='light_p'>
            Do usłyszenia! 😉
            </p>
        </main>
        <form action="" method='POST'>
            <div class="blank">
                <button type='submit' id='log' name='sbmt'>Wróć do strony głównej</button>
            </div>
        </form>
  </body>
</html>


