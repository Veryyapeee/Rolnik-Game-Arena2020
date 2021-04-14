<?php
    session_start();
    if(isset($_POST['submit'])){
        require "connect.php";
        session_unset();
        $mail = $_POST['mail'];
        $pwd = $_POST['pwd'];
        $radio = $_POST['radio'];
        
        $_SESSiON['cs_logon'] = false;
        $_SESSION['lol_logon'] = false;

        if(intval($radio) == 2){
        $sql = "SELECT * FROM lol_kapitan WHERE mail=?";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL error";
            exit();
        }else{
             mysqli_stmt_bind_param($stmt, "s", $mail);
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             mysqli_stmt_store_result($stmt); 
             $rows = mysqli_stmt_num_rows($stmt);
            
             if($result=mysqli_fetch_assoc($result)){
                 $pwdCheck = password_verify($pwd, $result['haslo']);

                 if($pwdCheck==false){
                    header("Location: ../zaloguj_user.php");
                    $_SESSION['error'] = "Błędne hasło lub adres e-mail!";
                     exit();
                 }else if($pwdCheck==true){
                     $_SESSION['lol_logon']=true;
                     $_SESSION['imie'] = $result['imie'];
                     $_SESSION['druzyna'] = $result['team_name'];
                     $_SESSION['tabela'] = 'lol_zawodnicy';
                     header("Location:../lol_cpt.php");
                     
                 }
             }
             if(!isset($_SESSION['imie'])){
                header("Location: ../zaloguj_user.php");
                $_SESSION['error'] = "Błędne hasło lub adres e-mail!";
                exit();
            }
        }

        

        }
        else if(intval($radio)==1){
            $sql = "SELECT * FROM cs_kapitan WHERE mail=?";

            $stmt = mysqli_stmt_init($conn);
    
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "SQL error";
                exit();
            }else{
                 mysqli_stmt_bind_param($stmt, "s", $mail);
                 mysqli_stmt_execute($stmt);
                 $result = mysqli_stmt_get_result($stmt);
                 mysqli_stmt_store_result($stmt); 
                $rows = mysqli_stmt_num_rows($stmt);
                
                 if($result=mysqli_fetch_assoc($result)){
                     $pwdCheck = password_verify($pwd, $result['haslo']);
    
                     if($pwdCheck==false){
                         header("Location: ../zaloguj_user.php");
                         $_SESSION['error'] = "Błędne hasło lub adres e-mail!";
                         exit();
                     }else if($pwdCheck==true){
                         $_SESSION['cs_logon']=true;
                         $_SESSION['imie'] = $result['imie'];
                         $_SESSION['druzyna'] = $result['team_name'];
                         $_SESSION['tabela'] = 'cs_zawodnicy';
                         header("Location:../cs_cpt.php");
                        
                     }
                 }
            }
           
            
            if(!isset($_SESSION['imie'])){
                header("Location: ../zaloguj_user.php");
                $_SESSION['error'] = "Błędne hasło lub adres e-mail!";
                exit();
            }
        } else{
            header("Location: ../zaloguj_user.php");
            $_SESSION['error'] = "Błędne hasło lub adres e-mail!";
            exit();
        }
        
        $conn->close();
    }

?>

