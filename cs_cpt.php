<?php
     session_start();
    
    if($_SESSION['cs_logon']==false){
        header("Location: zaloguj_user.php");
        exit();
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="theme-color" content="#1f1f1f" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/favicon.png"
    />
    <link rel="stylesheet" href="css/kapitan.css">
    <link rel="stylesheet" href="css/fonts3.css">

    <title>Panel kapitana</title>
</head>
<body>
    <div id="kontener">
        <header>
            <img src="assets/logo-main.svg" alt="" id='logo'>

            <form action="include/logout.php">
                <button type='submit' id='logout'>
                    Wyloguj
                </button>
            </form>
            <button  id='logout'>
                Dokumenty
            </button>
        </header>
        <div style='clear: both;'></div>
        <span id='logowanie'>Zarządzanie drużyną</span>

        <main>
            <div class="team_name">
                Nazwa drużyny <br>
                <?php
                    echo $_SESSION['druzyna'];
                ?>
            </div>
            <img src="assets/csgologo-white.png" alt="" id='game_logo'>
            <div style='clear: both;'></div>
            
            <span id='logo_tag'>Logo drużyny</span>

            <div class="logo_con">
                <img src="assets/nologo.png" alt="" id='team_logo'>
                <div class="button_logo">
                  <!-- BUTTON I WYSYŁANIE LOGO :)-->
                </div>
                <span class="button_dsc">
                Pamiętaj, aby logo było kwadratowe, w formacie .png bądź .jpg, co najmniej 100x100
            </span>
            </div>
            <div id="zawodnicy">
                
                <span class='first_span'>Kapitan (ty)</span>

                <span>Zawodnik 2</span>

                    <?php
                        require "include/zawodnikchk/zaw2.php";
                    ?>

                <span>Zawodnik 3</span>

                    <?php
                        require "include/zawodnikchk/zaw3.php";
                    ?>

                <span>Zawodnik 4</span>

                    <?php
                        require "include/zawodnikchk/zaw4.php";
                    ?>

                <span>Zawodnik 5</span>

                    <?php
                        require "include/zawodnikchk/zaw5.php";
                    ?>

                <span>Zawodnik rezerwowy</span>

                    <?php
                        require "include/zawodnikchk/zaw6.php";
                    ?>

                <span>Trener</span>

                    <?php
                        require "include/zawodnikchk/zaw7.php";
                    ?>

                <div class="szukaj_team">
                    <button>Szukam Teamu</button>
                </div>  

                <div class="kontakt">
                    <button>Kontakt</button>
                </div>

                <div class="brakuje_q">
                    Brakuje Ci członków drużyny? <br> Dobierz ich tutaj!
                </div>

            </div>

        </main>
    </div>
</body>
</html>