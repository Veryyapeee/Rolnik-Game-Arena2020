<?php

    session_start();

    if($_SESSION['lol_logon']==false){
        header("Location: zaloguj_user.php");
        exit();
    }

?>