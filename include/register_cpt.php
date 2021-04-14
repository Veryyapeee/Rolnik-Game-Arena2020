<?php
    session_start();
    if(isset($_POST['sbmt'])){
        require "connect.php";
        $gra = $_POST['gra'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $mail = $_POST['mail'];
        $wiek = $_POST['wiek'];
        $szkola = $_POST['szkola'];
        $team_name = $_POST['team_name'];
        $about = $_POST['o_was'];
        $link = $_POST['link'];


        if(empty($imie) || empty($nazwisko) || empty($mail) || empty($wiek) || empty($szkola) || empty($team_name)){
            header("Location: ../$link");
            $_SESSION['regulaminact']=true;
            $_SESSION['error'] = "Upewnij się, że uzupełniłeś wszystkie pola!";
            exit();
        }else{

            $stmt1 = mysqli_stmt_init($conn);
            $sql1 = "SELECT * FROM $gra WHERE mail='$mail' OR team_name='$team_name'";
            if(!mysqli_stmt_prepare($stmt1, $sql1)){
                echo "Sql error";
            }else{
                mysqli_stmt_execute($stmt1);
                mysqli_stmt_store_result($stmt1); 
                $rows = mysqli_stmt_num_rows($stmt1);
                if($rows>0){
                    header("Location: ../$link");
                    $_SESSION['regulaminact']=true;
                    $_SESSION['error'] = "Użytkownik o podanych danych już istnieje!";
                    exit();
                }
                else{
                    $stmt = mysqli_stmt_init($conn);
                    $sql = "INSERT INTO $gra (id, imie, nazwisko, wiek, szkola, about_team, team_name, mail, haslo) VALUES(NULL,?,?,?,?,?,?,?,?)";

                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        echo "Sql error";
                    }else{
                        $first = rand();
                        $password = password_hash($first, PASSWORD_DEFAULT);
                        $password_hash = password_hash($password, PASSWORD_DEFAULT );
                        mysqli_stmt_bind_param($stmt, "ssssssss", $imie, $nazwisko, $wiek, $szkola, $about, $team_name, $mail, $password_hash);
                        mysqli_stmt_execute($stmt);
                        $_SESSION['zarejestrowanygra']=true;
                        header("Location: ../small/zarejestrowany_gra.php");
                    }

                }
            }
        }
    }

?>