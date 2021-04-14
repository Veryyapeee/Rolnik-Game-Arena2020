<?php
    session_start();
    if(isset($_POST['sbmt'])){
        require "connect.php";
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $mail = $_POST['mail'];
        $wiek = $_POST['wiek'];
        $szkola = $_POST['szkola'];
        $sociale = $_POST['sociale'];
        $opis = $_POST['opis'];
        $materialy = $_POST['materialy'];
        $muzyka = $_POST['muzyka'];
        $opis_wystepu = $_POST['opis_wystepu'];
        $tekst = $_POST['tekst'];
        $zapotrzebowanie = $_POST['zapotrzebowanie'];
        $dodatkowe_info = $_POST['dodatkowe_info'];


        if(empty($imie) || empty($nazwisko) || empty($mail) || empty($wiek) || empty($szkola) || empty($opis)){
            $_SESSION['regulamincosplay']=true;
            $_SESSION['error'] = "Upewnij się, że uzupełniłeś wszystkie pola!";
            header("Location: ../register_cosplay.php");
            exit();
        }else{

            $stmt1 = mysqli_stmt_init($conn);
            $sql1 = "SELECT * FROM cosplay WHERE mail='$mail'";
            if(!mysqli_stmt_prepare($stmt1, $sql1)){
                echo "Sql error";
            }else{
                mysqli_stmt_execute($stmt1);
                mysqli_stmt_store_result($stmt1); 
                $rows = mysqli_stmt_num_rows($stmt1);
                if($rows>0){
                    header("Location: ../register_cosplay.php");
                    $_SESSION['regulamincosplay']=true;
                    $_SESSION['error'] = "Użytkownik o podanych danych już istnieje!";
                    exit();
                }
                else{
                    $stmt = mysqli_stmt_init($conn);
                    $sql = "INSERT INTO cosplay (id, imie, nazwisko, mail, wiek, szkola, social, opis, materialy, muzyka, opis_wystep, zapowiedz, zapotrzebowanie, info_dodatkowe) VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo "Sql error";
                    }else{
                        mysqli_stmt_bind_param($stmt, "sssssssssssss", $imie, $nazwisko, $mail, $wiek, $szkola, $sociale, $opis, $materialy, $muzyka, $opis_wystepu, $tekst, $zapotrzebowanie, $dodatkowe_info);
                        mysqli_stmt_execute($stmt);
                        $_SESSION['zarejestrowanycosplay']=true;
                        header("Location: ../small/zarejestrowany_cosplay.php");
                    }

                }
            }
        }
    }

?>