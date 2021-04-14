<?php
    session_start();
    if(isset($_POST['sbmt'])){
      $_SESSION['regulamincosplay']=true;
      header("Location: register_cosplay.php");
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

    <link rel="stylesheet" href="css/registration_cosplay.css" />
    <link rel="stylesheet" href="css/fonts4.css" />

    <title>Rejestracja Cosplay</title>
  </head>
  <body>
    <div id="kontener">
      <header>
        <a href='index.html'><img src="assets/logo-main.svg" alt="" id="logo" /></a>
      </header>
      <div style="clear:both;"></div>
      <span id="logowanie">Panel rejestracji drużyny</span>

      <main>
        <span id="reg_title">Regulamin* </span>
        <div class="regulamin_window">
            <strong>Regulamin Konkursu Cosplay</strong> <br>
            Rolnik Game Arena 2020 <br><br>

            <p><strong>1.Postanowienia ogólne</strong></p>
            <p>Tutaj treść regulaminu</p>

        </div>
        <div id="rodo">
          <div id="rodo_radio">
            <label for="opt" class="radio">
              <input type="radio" name="rdo" id="opt" class="hidden" />
              <span class="label"></span>
            </label>
          </div>
          <div id="akceptuje">
           Akceptuję postanowienia regulaminu turnieju i imprezy i zobowiązuję się do jego przestrzegania.
          </div>
        </div>
      </main>

      <div id="bottom">
        <div class="act2"></div>
        <div class="dis2"></div>
        <form action="" method='POST'>
          <button type='submit' id='next' disabled name='sbmt'>Dalej</button>
        </form>
      </div>
    </div>
      
  </body>
  <script src='js/jquery-3.4.1.min.js'></script>
  <script src='js/form.js'></script>
</html>
