<?php
  session_start();
   if(!isset($_SESSION['regulamincosplay'])){
    header("Location: index.html"); 
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
        <span id="reg_title">Dane kapitana* </span>
        <?php
          if(isset($_SESSION['error'])){
            echo "<span id='error'>".$_SESSION['error']."</span>";
          }
        ?>
        <form action="include/cosplay_reg.php" method='post'>
          <div class="registration">
            <div id="reg_o">
              <label for="imie">Imię</label> <br />
              <input type="text" id="imie" placeholder="Imię" name='imie' />
            </div>
            <div id="reg_two">
              <label for="nazwisko">Nazwisko</label> <br />
              <input type="text" id="nazwisko" placeholder="Nazwisko" name='nazwisko' />
            </div>
            <div id="reg_three">
              <label for="mail">Adres e-mail</label> <br />
              <input type="mail" id="mail" placeholder="Adres e-mail" name='mail' />
            </div>
            <div id="reg_four">
              <label for="wiek">Wiek</label> <br />
              <input type="text" id="wiek" placeholder="Wiek" name='wiek'/>
            </div>
            <div id="reg_five">
              <label for="szkola">Szkoła</label> <br />
              <select name="szkola" id="szkola">
                <option value="RCKU">Rolnik</option>
                <option value="kazik">kazik</option>
              </select>
            </div>
            <div id="reg_six">
              <label for="team_name">Twoje sociale (opcjonalne)</label>
              <input type="text" id="team_name" placeholder="Wszystko, co chcesz promować" name='sociale' />
            </div>
          </div>

          <label for="" id="title2">Opisz, jaką postać odegrasz</label>

          <textarea placeholder='Przedstaw swój pomysł, może to być tylko pełna nazwa postaci i skąd ona pochodzi (w domyśle uniwersum/ świat gry).' name="opis" id=""></textarea>

          <label for='materialy'>Materiały referencyjne (opcjonalne)</label>
          <input type='text' id='materialy' name='materialy' placeholder='Wklej tutaj linki do zdjęć'>

          <label for="muzyka">Podkład muzyczny występu (opcjonalne)</label>
          <input type="text" name='muzyka' id='muzyka' placeholder='Link do pliku audio lub YouTube'>

          <label for="opis">Krótki opis występu (opcjonalne)</label>
          <input type="text" id='opis' name='opis_wystepu' placeholder='Opisz swój występ'>

          <label for="tekst">Tekst zapowiedzi (opcjonalne)</label>
          <input type="text" id='tekst' name='tekst' placeholder='Co mamy powiedzieć, zanim się zaprezentujesz?'>

          <label for="zapotrzebowanie">Zapotrzebowanie (opcjonalne)</label>
          <input type="text" id='zapotrzebowanie' name='zapotrzebowanie' placeholder='Np. ławka, krzesło, ...'>
          
          <label for="dodatkowe_info">Dodatkowe informacje (opcjonalne)</label>
          <textarea placeholder='Chcesz nam coś przekazać? Występujesz w grupie? Podaj nam tutaj dane pozostałych uczestników uwzględniając imię, nazwisko, wiek, sociale (opcjonalnie) oraz ich rolę.' name="dodatkowe_info" id="dodatkowe_info"></textarea>


          <span id="title">Zanim przejdziemy dalej...</span>
          <span id="before">
            Potrzebujemy Twojej zgody na przetwarzanie danych osobowych. Dane z
            pół “Imię”, “Nazwisko”, “Adres e-mail”, “Wiek”, “Szkoła” zostaną
            użyte do następnego kroku rejestracji drużyny, a dostęp do nich będą
            mieli tylko Administratorzy strony oraz Organizatorzy. Bez twojej
            zgody nie będziemy mogli przejść dalej. Na tym etapie żadne z tych
            danych nie są zapisywane. Jeżeli masz mniej niż 16 lat - poproś
            swojego opiekuna prawnego, aby zapoznał się i zdecydował, nie chcemy
            mieć problemów, dzięki! ♥
          </span>

        <div id="rodo">
          <div id="rodo_radio">
            <label for="opt" class="radio">
              <input type="radio" name="rdo" id="opt" class="hidden" />
              <span class="label"></span>
            </label>
          </div>
          <div id="rodo_text">
            Wyrażam zgodę na przetwarzanie danych osobowych mojego dziecka
            zawierających imię i nazwisko, adres e-mail na stronie internetowej
            rolnikgamearena.pl oraz na facebook.com/rgarolnik w związku z jego
            udziałem w turnieju gier komputerowych Rolnik Game Arena
            organizowanym w Zespole Szkół nr 4 RCKU w Wałczu, ul. Południowa 10,
            który jest Administratorem danych osobowych w ramach ww. turnieju...
            <a href="">zobacz pełną treść zgody</a>
          </div>
        </div>
      </main>

      <div id="bottom">
        <div class="dis"></div>
        <div class="act"></div>
        <button type='submit' id='next' disabled name='sbmt'>Dalej</button>
      </div>
    </div>
        </form>
  </body>
  <script src='js/jquery-3.4.1.min.js'></script>
  <script src='js/form.js'></script>
  <?php
     session_unset();
  ?>
</html>
