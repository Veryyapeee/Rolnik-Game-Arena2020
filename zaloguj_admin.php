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

    <title>Panel Administratora</title>
  </head>
  <body>
    <div class="kontener">
        <img src="assets/logo-main.svg" />
        <span id='logowanie'>Logowanie do panelu administratora</span>
        <main>
        
            <form action="">
                <label for='login'>Login</label>
            
                <input type="mail" name="login" id='login'/> 
                <label for='haslo' id='label_haslo'>Hasło </label>
                <input type="password" name="pwd" id='haslo' />

        </main>

                <button type="submit">Zaloguj</button>
            </form>
            
    </div>
  </body>
</html>
