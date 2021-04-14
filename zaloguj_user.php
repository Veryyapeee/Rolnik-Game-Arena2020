<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="theme-color" content="#1f1f1f" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/favicon.png"
    />

    <link rel="stylesheet" href="css/zaloguj.css" />
    <link rel="stylesheet" href="css/fonts2.css">
    <link rel="stylesheet" href="https://use.typekit.net/okr2igk.css">

    <title>Zaloguj się</title>
  </head>
  <body>
    <div class="kontener">
        <a href='index.html'><img src="assets/logo-main.svg" /></a>
        <span id='logowanie'>Logowanie do panelu kapitana</span>
        <main>
            <?php
              if(isset($_SESSION['error'])){
                echo "<span class='error'>".$_SESSION['error']."</span>";
                session_unset();
              }
            ?>
            <form action="include/login_user.php" method='POST'>
                <label for='login'>Adres e-mail</label>
            
                <input type="mail" name="mail" id='login'/> 

                <label for='haslo' id='label_haslo'>Hasło </label>

                <input type="password" name="pwd" id='haslo' />

                <label for='csr'>Counter Strike</label>

                <label for='csr' class='radio'>

                <input type="radio" name='radio' value='1' id='csr' class='hidden'> 
                <span class="label"></span>
                </label>
                <br>
                <label for='lolr'>League of Legends</label>

                <label for='lolr' class='radio'>

                <input type="radio" name='radio' value='2' id='lolr' class='hidden'> 
                <span class="label"></span>
                </label>
               

                <span id="txt1"
                    >Użyj danych do logowania, które Ci wysłaliśmy po rejestracji.</span
                > <br>

                <span id="txt2">Zajrzyj do skrzynki mailowej, sprawdź folder SPAM.</span>
        </main>

                <button type="submit" name='submit'>Zaloguj</button>
            </form>
            
    </div>
  </body>
</html>
